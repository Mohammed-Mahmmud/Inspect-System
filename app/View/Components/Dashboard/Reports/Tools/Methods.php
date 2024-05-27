<?php

namespace App\View\Components\Dashboard\Reports\Tools;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Methods extends Component {
    /**
    * Create a new component instance.
    */
    public $inspMethods;
    public function __construct() {
        $this->inspMethods = [ 'visual',
        'boroscopic',
        'dimensional',
        'mag particle',
        'eddy current',
        'liquid penet',
        'ultrasonic' ];
    }

    /**
    * Get the view / contents that represent the component.
    */

    public function render(): View|Closure|string {
        return view( 'components.dashboard.reports.tools.methods', ['inspMethods'=>$this->inspMethods ] );
    }
}
