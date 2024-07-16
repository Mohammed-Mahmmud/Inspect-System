<?php

namespace App\View\Components\Website\Reports\Layouts;

use App\Models\User;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Signature extends Component
{
    /**
     * Create a new component instance.
     */
    public $image;
    public function __construct(public $user)
    {
        $this->user = User::FindOrFail($user);
        $this->image = $this->user->getFirstMediaPath($this->user->name);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.website.reports.layouts.signature');
    }
}
