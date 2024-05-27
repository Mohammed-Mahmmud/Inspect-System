<?php

namespace App\Livewire\Dashboard\Tublar\Tubs;

use Livewire\Component;

class Report extends Component
{
    public $type;
    public $examType;
    public function mount($type, $examType)
    {
        $this->type = $type;
        $this->examType = $examType;
    }
    public function save()
    {
        dd('wlcm'); 
        dd($this->type, $this->examType);

        return redirect()->to('/posts')
             ->with('status', 'Post created!');
    }
    public function render()
    {
        return view('livewire.dashboard.tublar.tubs.report');
    }
}