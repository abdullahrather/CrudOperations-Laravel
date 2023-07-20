<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DbName extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:get_db_name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Get Project's Database Name";

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $dbname = DB::connection()->getDatabaseName();
        $this->info("this project's database name is $dbname");
    }
}
