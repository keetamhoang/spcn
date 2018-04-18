<?php

namespace App\Console\Commands;

use App\Model\Account;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class AddAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:admin {--username=} {--password=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add admin';

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
        $username = $this->option('username');
        $password = $this->option('password');

        if (!empty($username)) {
            $this->line('Create Admin with username='.$username);

            User::create([
                'username' => $username,
                'password' => Hash::make($password),
                'type' => config('const.ADMIN')
            ]);

            $this->line('Done');
        }
    }
}
