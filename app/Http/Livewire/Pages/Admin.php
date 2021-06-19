<?php

namespace App\Http\Livewire\Pages;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Admin extends Component
{
    use WithPagination; 
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $collection = User::paginate(5);
        return view('livewire.pages.admin', compact('collection'))
        ->extends('layouts.app')
        ->section('content');
    }
}
