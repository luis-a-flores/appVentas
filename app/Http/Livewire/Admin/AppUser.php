<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AppUser extends Component
{

    public $counter = 0; 


    public function render()
    {
        return view('livewire.admin.app-user');
    }

    public function suma($num){

        $this->counter += $num;

    }
}
