<?php

namespace App\Http\Controllers;

use App\Events\Dashboard\SyncEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;

class DatabaseSyncController extends Controller
{
    public function sync(Request $request)
    {
        Log::info('Sync method called');
        // Run the sync event
        // event(new SyncEvent());

        // Run the sync command
        Artisan::call('sync:databases');
        $output = Artisan::output();
        Log::info('Artisan output: ' . $output);
        return redirect()->back()->with('status', 'Database synchronization completed.');
    }
}
