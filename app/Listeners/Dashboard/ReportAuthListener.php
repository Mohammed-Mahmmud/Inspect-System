<?php

namespace App\Listeners\Dashboard;

use App\Events\Dashboard\ReportAuthEvent;
use App\Helper\TranslationHelper;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ReportAuthListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ReportAuthEvent $event): void
    {
        $user = auth()->user();
        if ($user->id != $event->id && !$user->can('editor')) {
            session()->flash('error', TranslationHelper::translate('Unauthorized access'));
            abort(404);
        }
    }
}
