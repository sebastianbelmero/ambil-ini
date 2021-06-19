<form wire:submit.prevent="editData">
    <div class="row mb-3">
        <div class="col-5">
            <input wire:model="nama" type="text" class="form-control" placeholder="nama">
        </div>
        <div class="col-5">
            <input wire:model="nim" type="text" class="form-control" placeholder="nim">
        </div>
        <div class="col-2">
            <button type="submit" class="btn btn-primary">edit</button>
        </div>
    </div>
</form>