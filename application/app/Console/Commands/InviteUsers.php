<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InviteUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'invite-users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send invitations to users';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Sending user invitations...');

        // Add your logic for inviting users here
        // Example: Query users and send emails
        // User::where('invited', false)->each(function ($user) {
        //     Mail::to($user->email)->send(new InviteUserMail($user));
        //     $user->update(['invited' => true]);
        // });

        $this->info('Invitations sent successfully.');
    }
}
