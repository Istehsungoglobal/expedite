<?php

namespace App\Livewire;

use Livewire\Component;

class SystemStorageMetrics extends Component
{
    /**
     * Disk to check storage metrics for
     */
    public string $disk = 'local';

    /**
     * Storage metrics refresh interval in seconds
     */
    public int $refreshInterval = 30;

    /**
     * Storage metrics with all data
     */
    public array $metrics = [];

    protected $listeners = ['refresh' => 'getStorageMetrics'];

    /**
     * Mount the component
     */
    public function mount(string $disk = 'local', int $refreshInterval = 30)
    {
        $this->disk = $disk;
        $this->refreshInterval = $refreshInterval;
        $this->getStorageMetrics();
    }

    /**
     * Refresh the storage metrics
     */
    public function refresh()
    {
        $this->getStorageMetrics();
    }

    /**
     * Get storage metrics for the specified disk
     */
    public function getStorageMetrics(): void
    {
        try {
            // Get the disk path
            $diskPath = storage_path('app');
            if ($this->disk !== 'local') {
                $diskPath = config("filesystems.disks.{$this->disk}.root");
            }

            // Calculate storage metrics
            $totalSpace = disk_total_space($diskPath);
            $freeSpace = disk_free_space($diskPath);

            $usedSpace = $totalSpace - $freeSpace;
            $usagePercent = ($usedSpace / $totalSpace) * 100;

            // Break down used space into categories (example distribution)
            $regularSpace = $usedSpace * 0.61; // 61% of used space - adjust as needed
            $systemSpace = $usedSpace * 0.26; // 26% of used space - adjust as needed
            $sharedSpace = $usedSpace * 0.13; // 13% of used space - adjust as needed

            $regularPercent = ($regularSpace / $totalSpace) * 100;
            $systemPercent = ($systemSpace / $totalSpace) * 100;
            $sharedPercent = ($sharedSpace / $totalSpace) * 100;
            $freePercent = ($freeSpace / $totalSpace) * 100;

            $this->metrics = [
                'total' => [
                    'bytes' => $totalSpace,
                    'formatted' => $this->formatBytes($totalSpace),
                ],
                'used' => [
                    'bytes' => $usedSpace,
                    'formatted' => $this->formatBytes($usedSpace),
                    'percent' => round($usagePercent, 2),
                ],
                'free' => [
                    'bytes' => $freeSpace,
                    'formatted' => $this->formatBytes($freeSpace),
                    'percent' => round($freePercent, 2),
                ],
                'categories' => [
                    'regular' => [
                        'bytes' => $regularSpace,
                        'formatted' => $this->formatBytes($regularSpace),
                        'percent' => round($regularPercent, 2),
                    ],
                    'system' => [
                        'bytes' => $systemSpace,
                        'formatted' => $this->formatBytes($systemSpace),
                        'percent' => round($systemPercent, 2),
                    ],
                    'shared' => [
                        'bytes' => $sharedSpace,
                        'formatted' => $this->formatBytes($sharedSpace),
                        'percent' => round($sharedPercent, 2),
                    ],
                ],
                'error' => null,
            ];
        } catch (\Exception $e) {
            $this->metrics = [
                'total' => ['bytes' => 0, 'formatted' => '0 B'],
                'used' => ['bytes' => 0, 'formatted' => '0 B', 'percent' => 0],
                'free' => ['bytes' => 0, 'formatted' => '0 B', 'percent' => 0],
                'categories' => [
                    'regular' => ['bytes' => 0, 'formatted' => '0 B', 'percent' => 0],
                    'system' => ['bytes' => 0, 'formatted' => '0 B', 'percent' => 0],
                    'shared' => ['bytes' => 0, 'formatted' => '0 B', 'percent' => 0],
                ],
                'error' => $e->getMessage(),
            ];
        }
    }

    /**
     * Format bytes to human readable format
     */
    protected function formatBytes($bytes, $precision = 2): string
    {
        if ($bytes === 0) {
            return '0 B';
        }

        $units = ['B', 'KB', 'MB', 'GB', 'TB', 'PB'];
        $pow = floor(log($bytes) / log(1024));
        $pow = min($pow, count($units) - 1);

        $bytes /= (1 << (10 * $pow));

        return round($bytes, $precision).' '.$units[$pow];
    }

    /**
     * Render the component
     */
    public function render()
    {
        return view('livewire.system-storage-metrics');
    }
}
