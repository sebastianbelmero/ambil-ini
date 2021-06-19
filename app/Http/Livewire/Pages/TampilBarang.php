<?php

namespace App\Http\Livewire\Pages;

use App\Models\Barang;
use Livewire\Component;

class TampilBarang extends Component
{
    protected $listeners = ['refreshTable' => '$refresh'];

    public function render()
    {
        $collection = Barang::all();
        return view('livewire.pages.tampil-barang',compact('collection'));
    }
    public function hapusBarang($idBarang)
    {
        $barang = Barang::find($idBarang);
        $barang->delete();
        $this->emit('refreshTable');
    }
}
