<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SyncDatabases extends Command
{
    protected $signature = 'sync:databases';
    protected $description = 'Synchronize local database with online database';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        try {
            Log::info('SyncDatabases command started');
            $this->syncAllTables();
            Log::info('SyncDatabases command completed successfully');
            $this->info('Database synchronization completed.');
        } catch (\Exception $e) {
            Log::error('Error during database synchronization: ' . $e->getMessage());
            $this->error('Error during database synchronization: ' . $e->getMessage());
        }
    }

    protected function syncAllTables()
    {
        $tables = [
            'acceptance', 'checklist', 'company', 'failed_jobs', 'job_ticket', 'media',
            'migrations', 'model_has_permissions', 'model_has_roles', 'mpi', 'mud_jar', 'orders', 'password_reset_tokens',
            'permissions', 'personal_access_tokens', 'report_desc', 'report_settings', 'rig', 'roles', 'role_has_permissions',
            'shakle_size', 'sidebar', 'thorough_examination', 'tools', 'tools_extensions', 'translation_keys', 'tublar_summary',
            'tubs', 'tubs_summary', 'users'
        ];
        DB::setDefaultConnection('mysql');
        foreach ($tables as $table) {
            $this->uploadLocalData($table);
            $this->pullOnlineData($table);
        }
        DB::setDefaultConnection('mysql');
    }

    protected function uploadLocalData($table)
    {
        DB::setDefaultConnection('mysql');
        $localData = DB::table($table)->get();
        DB::setDefaultConnection('mysql_online');
        foreach ($localData as $data) {
            $primaryKey = DB::table($table)->getConnection()->getSchemaBuilder()->getColumnListing($table)[0];
            $exceptIdData = collect((array) $data)->except($primaryKey)->toArray();
            DB::table($table)->updateOrInsert([$primaryKey => $data->{$primaryKey}], $exceptIdData);
        }
        DB::setDefaultConnection('mysql');
    }

    protected function pullOnlineData($table)
    {
        DB::setDefaultConnection('mysql_online');
        $onlineData = DB::table($table)->get();
        DB::setDefaultConnection('mysql');
        foreach ($onlineData as $data) {
            $primaryKey = DB::table($table)->getConnection()->getSchemaBuilder()->getColumnListing($table)[0];
            $exceptIdData = collect((array) $data)->except($primaryKey)->toArray();
            DB::table($table)->updateOrInsert([$primaryKey => $data->{$primaryKey}], $exceptIdData);
        }
    }
}
