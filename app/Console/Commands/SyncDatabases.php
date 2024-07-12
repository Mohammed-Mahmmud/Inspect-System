<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class SyncDatabases extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync:databases';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Synchronize local database with online database';

    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try {
            $this->syncAllTables();

            $this->info('Database synchronization completed.');
        } catch (\Exception $e) {
            $this->error('Error during database synchronization: ' . $e->getMessage());
        }
    }

    protected function syncAllTables()
    {
        // List of tables you want to sync
        $tables = ['companies'];

        // Switch to local database
        DB::setDefaultConnection('mysql');

        foreach ($tables as $table) {
            $this->uploadLocalData($table);
            $this->pullOnlineData($table);
        }

        // Switch back to local database
        DB::setDefaultConnection('mysql');
    }

    protected function uploadLocalData($table)
    {
        // Switch to local database
        DB::setDefaultConnection('mysql');

        // Fetch local data
        $localData = DB::table($table)->get();

        // Switch to online database
        DB::setDefaultConnection('mysql_online');

        // Insert or update data in online database
        foreach ($localData as $data) {
            DB::table($table)->updateOrInsert(['id' => $data->id], (array) $data);
        }

        // Switch back to local database
        DB::setDefaultConnection('mysql');
    }

    protected function pullOnlineData($table)
    {
        // Switch to online database
        DB::setDefaultConnection('mysql_online');

        // Fetch online data
        $onlineData = DB::table($table)->get();

        // Switch to local database
        DB::setDefaultConnection('mysql');

        // Insert or update data in local database
        foreach ($onlineData as $data) {
            DB::table($table)->updateOrInsert(['id' => $data->id], (array) $data);
        }
    }
}
