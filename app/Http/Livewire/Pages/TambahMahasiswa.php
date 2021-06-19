<?php

namespace App\Http\Livewire\Pages;

use App\Models\mahasiswa;
use Livewire\Component;

class TambahMahasiswa extends Component
{
    public $nama;
    public $nim;

    public function render()
    {
        return view('livewire.pages.tambah-mahasiswa');
    }

    public function simpanData()
    {
        mahasiswa::create([
            'nama' => $this->nama,
            'nim' => $this->nim
        ]);
        $this->reset();
        $this->emit('refreshTable');
    }
}
