<?php

namespace App\Http\Livewire\Pages;

use App\Models\mahasiswa;
use Livewire\Component;

class EditMahasiswa extends Component
{
    public $idnya;
    public $nama, $nim;

    public function mount($id)
    {
        $this->idnya = $id;
        $mahasiswa = mahasiswa::find($this->idnya);
        $this -> nama = $mahasiswa->nama;
        $this -> nim = $mahasiswa->nim;
    }
    public function render()
    {
        return view('livewire.pages.edit-mahasiswa')
        ->extends('layouts.app')
        ->section('content');
    }

    public function editData()
    {
        $mahasiswa = mahasiswa::find($this->idnya);
        $mahasiswa->nama = $this->nama;
        $mahasiswa->nim = $this->nim;
        $mahasiswa->save();
        return redirect()->route('mahasiswa');
    }
}
