<?php

namespace App\Console\Commands;

use App\Models\Queue;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('app:reset-queues')]
#[Description('Reset all patient queues and restart sequences.')]
class ResetQueuesCommand extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Resetting Puskesmas queue tables...');
        
        // Truncate table to clear all rows and reset auto-increment index
        Queue::truncate();
        
        $this->info('Queues reset successfully. Auto-increment index set back to 1.');
    }
}

