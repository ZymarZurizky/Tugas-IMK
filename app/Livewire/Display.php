<?php

namespace App\Livewire;

use App\Models\Queue;
use Livewire\Component;

class Display extends Component
{
    public function render()
    {
        $today = now()->toDateString();

        // Get latest calling patient for TTS trigger
        $latestCalling = Queue::where('date', $today)
            ->where('status', 'calling')
            ->orderBy('called_at', 'desc')
            ->first();

        // Unified pending list for waiting pool (limit 5)
        $pendingQueues = Queue::where('date', $today)
            ->where('status', 'pending')
            ->orderBy('id', 'asc')
            ->limit(5)
            ->get();

        // Total pending queues today
        $totalPending = Queue::where('date', $today)
            ->where('status', 'pending')
            ->count();

        return view('livewire.display', [
            'latestCalling' => $latestCalling,
            'pendingQueues' => $pendingQueues,
            'totalPending' => $totalPending,
        ])->layout('layouts.empty');
    }
}
