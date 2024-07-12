<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class DatabaseSyncController extends Controller
{
    public function sync(Request $request)
    {
        // Run the sync command
        Artisan::call('sync:databases');

        return redirect()->back()->with('status', 'Database synchronization completed.');
    }
}
