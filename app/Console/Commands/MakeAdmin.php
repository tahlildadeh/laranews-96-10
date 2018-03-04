<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laranews:makeadmin {username} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this command returns user count';

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
        $this->info('salam');
        $this->info('username ' . $this->argument('username'));
        $this->info('password ' . $this->argument('password'));
    }
}
