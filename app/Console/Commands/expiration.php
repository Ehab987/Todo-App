<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class expiration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:expire';//1- name

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'expire users every 5 minute automatically';//2

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
    public function handle()//3-
    {
        $users = User::where('expire', 0)->get(); //collection of users
        foreach ($users as $user) {
            $user->update(['expire' => 1]);
        }
    }
}
