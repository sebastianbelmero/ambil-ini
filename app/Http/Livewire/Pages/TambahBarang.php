<?php

namespace App\Http\Livewire\Pages;

use App\Models\Barang;
use Livewire\Component;

class TambahBarang extends Component
{
    public $nama_barang;
    public $harga;

    public function render()
    {
        return view('livewire.pages.tambah-barang');
    }
        public function simpanData()
        {
            Barang::create([
                'nama_barang' => $this->nama_barang,
                'harga' => $this->harga
            ]);
            $this->reset();
            $this->emit('refreshTable');
        }
    
}
