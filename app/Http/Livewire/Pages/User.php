<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class User extends Component
{
    public function render()
    {
        return view('livewire.pages.user')
        ->extends('layouts.member')
        ->section('content');
    }
}
