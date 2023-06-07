<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Notification;
use App\Notifications\PushNotification as PushNotificationToUser;

class PushNotification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'push:notification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Notification::send(User::all(), new PushNotificationToUser());
    }
}
