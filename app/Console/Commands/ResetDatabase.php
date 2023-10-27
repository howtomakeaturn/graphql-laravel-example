<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class ResetDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        DB::table('products')->truncate();

        DB::table('comments')->truncate();

        DB::table('subscribers')->truncate();

        \Artisan::call("db:seed");

        return 0;
    }
}
