<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\School;
use App\SocialMediaLink;

class TopBarComponent extends Component
{
    public $school;
    public $socialMediaLinks;

    public function render()
    {
        $this->school = School::firstOrFail();
        $this->socialMediaLinks = SocialMediaLink::all();

        return view('livewire.top-bar-component');
    }
}
