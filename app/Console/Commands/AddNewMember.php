<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Twilio\Rest\Client;
use App\User;

class AddNewMember extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'channel:newMember';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add New Member';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $user = User::create([
            'username' => 'john',
            'email' => 'john@gmail.com',
            'password' => bcrypt('john')
        ]);

        $twilio = new Client(env('TWILIO_AUTH_SID'), env('TWILIO_AUTH_TOKEN'));

        $twilio->chat->v2->services(env('TWILIO_CHAT_SERVICE_SID'))
            ->channels(env('MIX_CHANNEL_SID'))
            ->members
            ->create($user->username, [
                'roleSid' => env('MIX_CHANNEL_MEMBER_ROLE_SID')
            ]);

        return $this->info('Add new members in channel!');
    }
}
