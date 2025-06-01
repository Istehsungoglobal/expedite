<?php

namespace App\View\Components;

use Closure;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\View\Component;

class WeatherCard extends Component
{
    /**
     * The location for weather data.
     *
     * @var string
     */
    public $location;

    /**
     * The weather data.
     *
     * @var array|null
     */
    public $weatherData;

    /**
     * Error message if weather data fetch fails.
     *
     * @var string|null
     */
    public $error;

    /**
     * Whether to use demo mode with mock data.
     *
     * @var bool
     */
    public $demoMode;

    /**
     * Create a new component instance.
     */
    public function __construct(string $location = 'New York City', bool $demoMode = false)
    {
        $this->location = $location;
        $this->demoMode = $demoMode;
        $this->fetchWeatherData();
    }

    /**
     * Fetch weather data for the location.
     */
    protected function fetchWeatherData(): void
    {
        // If in demo mode, use mock data instead of API call
        if ($this->demoMode) {
            $this->weatherData = $this->getMockWeatherData();

            return;
        }

        try {
            // Use cache to prevent excessive API calls (cache for 30 minutes)
            $cacheKey = 'weather_data_'.str_replace(' ', '_', strtolower($this->location));

            $this->weatherData = Cache::remember($cacheKey, 30 * 60, function () {
                // Get API key from config
                $apiKey = config('services.weather_api.key');

                if (empty($apiKey)) {
                    throw new Exception('Weather API key is not configured. Please set WEATHER_API_KEY in your .env file.');
                }

                // Make API request with detailed debugging
                $response = Http::get('https://api.weatherapi.com/v1/current.json', [
                    'key' => $apiKey,
                    'q' => $this->location,
                    'aqi' => 'no',
                ]);

                if ($response->successful()) {
                    return $response->json();
                }

                // Log the full error response for debugging
                Log::error('Weather API Error', [
                    'status' => $response->status(),
                    'body' => $response->body(),
                    'location' => $this->location,
                ]);

                // Fall back to mock data if API fails
                if ($response->status() === 403) {
                    // API key issue - likely unauthorized or exceeded limits
                    throw new Exception('API key unauthorized or rate limit exceeded. Status code: '.$response->status());
                }

                throw new Exception('Failed to fetch weather data: '.$response->status());
            });
        } catch (Exception $e) {
            $this->error = $e->getMessage();

            // Use mock data as fallback when real API fails
            $this->weatherData = $this->getMockWeatherData();

            // Log the error
            Log::warning('Weather component error: '.$e->getMessage());
        }
    }

    /**
     * Get mock weather data for demo purposes.
     */
    protected function getMockWeatherData(): array
    {
        // Generate realistic but mock data based on location
        $isWarm = in_array(strtolower($this->location), ['miami', 'dubai', 'bangkok', 'singapore']);
        $isCold = in_array(strtolower($this->location), ['toronto', 'moscow', 'oslo', 'helsinki']);

        $temp = $isWarm ? rand(25, 35) : ($isCold ? rand(-15, 5) : rand(10, 20));
        $humidity = rand(30, 85);
        $wind = rand(5, 25);
        $feelsLike = $temp + (rand(-3, 3));

        // Determine condition based on general location type
        $conditions = [
            'Sunny', 'Partly cloudy', 'Cloudy', 'Clear', 'Overcast',
        ];
        $condition = $conditions[array_rand($conditions)];

        // Return data in same format as the API
        return [
            'location' => [
                'name' => $this->location,
                'region' => 'Demo Region',
                'country' => 'Demo Country',
            ],
            'current' => [
                'temp_c' => $temp,
                'feelslike_c' => $feelsLike,
                'humidity' => $humidity,
                'wind_kph' => $wind,
                'condition' => [
                    'text' => $condition,
                    'icon' => $this->getIconForCondition($condition),
                ],
            ],
            '_is_mock' => true,
        ];
    }

    /**
     * Get weather icon URL for condition.
     */
    protected function getIconForCondition(string $condition): string
    {
        $condition = strtolower($condition);

        if (str_contains($condition, 'sun') || str_contains($condition, 'clear')) {
            return '//cdn.weatherapi.com/weather/64x64/day/113.png';
        }

        if (str_contains($condition, 'partly')) {
            return '//cdn.weatherapi.com/weather/64x64/day/116.png';
        }

        if (str_contains($condition, 'cloud') || str_contains($condition, 'overcast')) {
            return '//cdn.weatherapi.com/weather/64x64/day/119.png';
        }

        if (str_contains($condition, 'rain') || str_contains($condition, 'drizzle')) {
            return '//cdn.weatherapi.com/weather/64x64/day/296.png';
        }

        if (str_contains($condition, 'snow')) {
            return '//cdn.weatherapi.com/weather/64x64/day/326.png';
        }

        // Default icon
        return '//cdn.weatherapi.com/weather/64x64/day/116.png';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.weather-card');
    }
}
