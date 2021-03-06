<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;

use App\PrincipalsMessage;

class PrincipalsMessageCreate extends Component
{
    use WithFileUploads;

    public $name;
    public $email;
    public $phone;
    public $message;
    public $image;

    public function render()
    {
        return view('livewire.principals-message-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'nullable|email',
            'phone' => 'nullable',
            'message' => 'required',
            'image' => 'image',
        ]);

        //DB::beginTransaction();

        //try {
            $imagePath = $this->image->store('principals_message', 'public');
            $validatedData['image_path'] = $imagePath;

            PrincipalsMessage::create($validatedData);

            //DB::commit();

            /* Todo: Should this is outside the try block? */
            $this->emit('principalsMessageAdded');
        //} catch (\Exception $e) {
            //$this->resetInputFields();
            //DB::rollback();
        //}
    }

    public function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
        $this->message = '';
        $this->image = null; 
    }
}
