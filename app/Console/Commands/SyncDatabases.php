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
        $tables = [
            'acceptance', 'checklist', 'company', 'failed_jobs', 'job_ticket', 'media',
            'migrations', 'model_has_permissions', 'model_has_roles', 'mpi', 'mud_jar', 'orders', 'password_reset_tokens',
            'permissions', 'personal_access_tokens', 'report_desc', 'report_settings', 'rig', 'roles', 'role_has_permissions',
            'shakle_size', 'sidebar', 'thorough_examination', 'tools', 'tools_extensions', 'translation_keys', 'tublar_summary',
            'tubs', 'tubs_summary', 'users'
        ];
        // Switch to local database
        DB::setDefaultConnection('mysql');
        foreach ($tables as $table) {
            $this->uploadLocalData($table);
            $this->pullOnlineData($table);
        }

        // Switch back to local database
        DB::setDefaultConnection('mysql');
    }

    // protected function uploadLocalData($table)
    // {
    //     // Switch to local database
    //     DB::setDefaultConnection('mysql');

    //     // Fetch local data
    //     $localData = DB::table($table)->get();

    //     // Switch to online database
    //     DB::setDefaultConnection('mysql_online');

    //     // Insert or update data in online database
    //     foreach ($localData as $data) {
    //         // dd($data);
    //         // Assuming you have a 'uuid' column instead of 'id'
    //         DB::table($table)->updateOrInsert(['uuid' => $data->uuid], (array) $data);
    //     }

    //     // Switch back to local database
    //     DB::setDefaultConnection('mysql');
    // }

    // protected function pullOnlineData($table)
    // {
    //     // Switch to online database
    //     DB::setDefaultConnection('mysql_online');

    //     // Fetch online data
    //     $onlineData = DB::table($table)->get();

    //     // Switch to local database
    //     DB::setDefaultConnection('mysql');

    //     // Insert or update data in local database
    //     foreach ($onlineData as $data) {
    //         // Assuming you have a 'uuid' column instead of 'id'
    //         DB::table($table)->updateOrInsert(['uuid' => $data->uuid], (array) $data);
    //     }
    // }

    // except ('id')
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
            // Exclude 'id' column from the updateOrInsert check
            $primaryKey = DB::table($table)->getConnection()->getSchemaBuilder()->getColumnListing($table)[0];
            $exceptIdData = collect((array) $data)->except($primaryKey)->toArray();

            DB::table($table)->updateOrInsert([$primaryKey => $data->{$primaryKey}], $exceptIdData);
        }

        // Switch back to local database
        DB::setDefaultConnection('mysql');
    }
    // except ('id')
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
            // Exclude 'id' column from the updateOrInsert check
            $primaryKey = DB::table($table)->getConnection()->getSchemaBuilder()->getColumnListing($table)[0];
            $exceptIdData = collect((array) $data)->except($primaryKey)->toArray();

            DB::table($table)->updateOrInsert([$primaryKey => $data->{$primaryKey}], $exceptIdData);
        }
    }
}
