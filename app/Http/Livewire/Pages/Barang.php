<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Barang extends Component
{
    public function render()
    {
        return view('livewire.pages.barang')
        ->extends('layouts.app')
        ->section('content');
    }
}
