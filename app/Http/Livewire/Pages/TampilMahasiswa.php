<?php

namespace App\Http\Livewire\Pages;

use App\Models\mahasiswa;
use Livewire\Component;

class TampilMahasiswa extends Component
{
    protected $listeners = ['refreshTable' => '$refresh'];

    public function render()
    {
        $collection = mahasiswa::all();
        return view('livewire.pages.tampil-mahasiswa',compact('collection'));
    }

    public function hapusMahasiswa($idMahasiswa)
    {
        $mahasiswa = mahasiswa::find($idMahasiswa);
        $mahasiswa->delete();
        $this->emit('refreshTable');
    }
}
