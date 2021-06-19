<?php

namespace App\Http\Livewire\Pages;

use App\Models\Barang;
use Livewire\Component;

class EditBarang extends Component
{
    public $idnya;
    public $nama_barang, $harga;

    public function mount($id)
    {
        $this->idnya = $id;
        $barang = Barang::find($this->idnya);
        $this -> nama_barang = $barang->nama_barang;
        $this -> harga = $barang->harga;
    }
    public function render()
    {
        return view('livewire.pages.edit-barang')
        ->extends('layouts.app')
        ->section('content');
    }

    public function editData()
    {
        $barang = Barang::find($this->idnya);
        $barang->nama_barang = $this->nama_barang;
        $barang->harga = $this->harga;
        $barang->save();
        return redirect()->route('barang');
    }
    
}
