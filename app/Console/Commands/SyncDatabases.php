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
        $user = auth()->user();
        $pullTables = [
            'acceptance', 'checklist', 'company',  'job_ticket', 'media',
            'model_has_roles', 'mpi', 'mud_jar', 'orders',
            'permissions', 'report_desc', 'report_settings', 'rig', 'roles', 'role_has_permissions',
            'shakle_size', 'thorough_examination', 'tools', 'tools_extensions', 'tublar_summary',
            'tubs', 'tubs_summary', 'users'
        ];
        if ($user->hasRole('admin') || $user->hasRole('Owner')) {
            $uploadTables = [
                'acceptance', 'checklist', 'company',  'job_ticket', 'media',
                'model_has_roles', 'mpi', 'mud_jar', 'orders',
                'permissions', 'report_desc', 'report_settings', 'rig', 'roles', 'role_has_permissions',
                'shakle_size', 'thorough_examination', 'tools', 'tools_extensions', 'tublar_summary',
                'tubs', 'tubs_summary', 'users'
            ];
        } else {
            $uploadTables = [
                'media', 'rig', 'orders', 'checklist', 'job_ticket', 'mpi', 'mud_jar',
                'report_desc', 'shakle_size', 'thorough_examination', 'tools',
                'tools_extensions', 'tublar_summary', 'tubs', 'tubs_summary'
            ];
        }
        DB::setDefaultConnection('mysql');

        foreach ($uploadTables as $table) {
            $this->uploadLocalData($table);
        }
        foreach ($pullTables as $table) {
            $this->pullOnlineData($table);
        }
        DB::setDefaultConnection('mysql');
    }

    protected function uploadLocalData($table)
    {
        DB::setDefaultConnection('mysql');

        // Fetch local data excluding the 'id' column
        $localData = DB::table($table)->get()->map(function ($item) use ($table) {
            $primaryKey = DB::getSchemaBuilder()->getColumnListing($table)[0];
            return collect($item)->except($primaryKey);
        });

        DB::setDefaultConnection('mysql_online');

        foreach ($localData as $data) {
            try {
                // Check if a record with the same unique key exists
                $existingRecord = DB::table($table)->where($data->toArray())->first();
                if ($existingRecord) {
                    // Update existing record
                    DB::table($table)->where($existingRecord->id)->update($data->toArray());
                } else {
                    // Insert new record
                    DB::table($table)->insert($data->toArray());
                }
            } catch (\Exception $e) {
                Log::error("Error during uploadLocalData for table $table: " . $e->getMessage());
            }
        }

        DB::setDefaultConnection('mysql');
    }

    protected function pullOnlineData($table)
    {
        DB::setDefaultConnection('mysql_online');

        // Fetch online data excluding the 'id' column
        $onlineData = DB::table($table)->get()->map(function ($item) use ($table) {
            $primaryKey = DB::getSchemaBuilder()->getColumnListing($table)[0];
            return collect($item)->except($primaryKey);
        });

        DB::setDefaultConnection('mysql');

        foreach ($onlineData as $data) {
            try {
                // Check if a record with the same unique key exists
                $existingRecord = DB::table($table)->where($data->toArray())->first();
                if ($existingRecord) {
                    // Update existing record
                    DB::table($table)->where($existingRecord->id)->update($data->toArray());
                } else {
                    // Insert new record
                    DB::table($table)->insert($data->toArray());
                }
            } catch (\Exception $e) {
                Log::error("Error during pullOnlineData for table $table: " . $e->getMessage());
            }
        }
    }
}
