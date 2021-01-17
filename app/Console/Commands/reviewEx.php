<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class reviewEx extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:Nerd';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'after 1 min => name bilal is nerd';

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
        $users =User::where('name','bilal')->get();
        foreach($users as $user){
            $user->update(['name'=>'bilal_Nerd']);
            
        }
        }
    
}
