<div class="card h-md-100">
    <div class="card-header d-flex flex-between-center pb-0">
        <h6 class="mb-0">Weather</h6>
        <div class="dropdown font-sans-serif btn-reveal-trigger">
            <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal"
                    type="button" id="dropdown-weather-update" data-bs-toggle="dropdown" data-boundary="viewport"
                    aria-haspopup="true" aria-expanded="false">
                <span class="fas fa-ellipsis-h fs-11"></span>
            </button>
            <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-weather-update">
                <a class="dropdown-item" href="#!">View</a>
                <a class="dropdown-item" href="#!">Export</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="#!">Remove</a>
            </div>
        </div>
    </div>
    <div class="card-body pt-2">
        @if($weatherData)
            <div class="row g-0 h-100 align-items-center">
                <div class="col">
                    <div class="d-flex align-items-center">
                        <img class="me-3"
                             src="{{ $weatherData['current']['condition']['icon'] ?? asset('assets/images/icons/weather-icon.png') }}"
                             alt="{{ $weatherData['current']['condition']['text'] ?? 'Weather' }}"
                             height="60" />
                        <div>
                            <h6 class="mb-2">{{ $location }}</h6>
                            <div class="fs-11 fw-semi-bold">
                                <div class="text-warning">{{ $weatherData['current']['condition']['text'] ?? 'Unknown' }}</div>
                                Humidity: {{ $weatherData['current']['humidity'] ?? '-' }}%
                            </div>
                            @if(isset($weatherData['_is_mock']) && $weatherData['_is_mock'])
                                <div class="badge bg-warning text-dark mt-1 fs-9">Demo Data</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-auto text-center ps-2">
                    <div class="fs-5 fw-normal font-sans-serif text-primary mb-1 lh-1">{{ $weatherData['current']['temp_c'] ?? '-' }}&deg;C</div>
                    <div class="fs-10 text-800">
                        Feels like: {{ $weatherData['current']['feelslike_c'] ?? '-' }}&deg;C
                    </div>
                    <div class="fs-10 text-800 mt-1">
                        Wind: {{ $weatherData['current']['wind_kph'] ?? '-' }} km/h
                    </div>
                </div>
            </div>
            @if($error)
                <div class="alert alert-warning mb-0 mt-2 py-1 fs-9">
                    <i class="fas fa-exclamation-triangle me-1"></i>
                    {{ $error }}
                    <small class="d-block">Using demo data instead.</small>
                </div>
            @endif
        @else
            <div class="d-flex justify-content-center align-items-center py-3">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        @endif
    </div>
</div>
