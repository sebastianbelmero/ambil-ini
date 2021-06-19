<div class="container">
    <table class="table table-bordered">
        <tr>
            <th>nama barang</th>
            <th>harga</th>
            <th>aksi</th>
            
        </tr>
        @foreach ($collection as $item)
            <tr>
                <td>{{  $item->nama_barang }}</td>
                <td>{{  $item->harga }}</td>
                <td>
                    <a href="{{ route('edit-barang', $item->id) }}" class="btn btn-primary">edit</a>
                    <button wire:click="hapusBarang({{ $item->id }})" class="btn btn-danger">delete</button>
                </td>
                
            </tr>
        @endforeach
    </table>
</div>
