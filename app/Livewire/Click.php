<?php

namespace App\Livewire;

use Livewire\Component;

class Click extends Component
{
    public $count = 0;

    public $clickHistory = [];

    public function render()
    {
        return view('livewire.click');
    }

    public function increment()
    {
        $this->count++;
        $this->logAction('increment');
    }

    public function decrement()
    {
        $this->count--;
        $this->logAction('decrement');
    }

    public function resetCount()
    {
        $this->count = 0;
        $this->clickHistory = [];
    }

    private function logAction(string $action)
    {
        // Limit history size to prevent excessive memory usage
        if (count($this->clickHistory) >= 100) {
            array_shift($this->clickHistory);
        }

        $this->clickHistory[] = [
            'action' => $action,
            'count' => $this->count,
            'timestamp' => now()->format('Y-m-d H:i:s'),
        ];
    }
}
