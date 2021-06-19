<form wire:submit.prevent="simpanData">
    <div class="row mb-3">
            <div class="col-5">
                <input wire:model="nama_barang" type="text" class="form-control" placeholder="barang">
            </div>
            <div class="col-5">
                <input wire:model="harga" type="text" class="form-control" placeholder="harga">
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-primary">tambah</button>
            </div>
        </div>
    </form>
    