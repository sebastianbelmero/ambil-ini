<?php

namespace App\Http\Livewire\Pages;

use App\Models\mahasiswa as ModelsMahasiswa;
use Livewire\Component;

class Mahasiswa extends Component
{
    public function render()
    {
        $collection = ModelsMahasiswa::all();
        return view('livewire.pages.mahasiswa',compact('collection'))
        ->extends('layouts.app')
        ->section('content');
    }
}
