<div class="container">
    <table class="table table-bordered">
        <tr>
            <th>nama</th>
            <th>Nim</th>
            <th>Aksi</th>
            
        </tr>
        @foreach ($collection as $item)
            <tr>
                <td>{{  $item->nama }}</td>
                <td>{{  $item->nim }}</td>
                <td>
                    <a href="{{ route('edit-mahasiswa', $item->id) }}" class="btn btn-primary">edit</a>
                    <button wire:click="hapusMahasiswa({{ $item->id }})" class="btn btn-danger">delete</button>
                </td>
            </tr>
        @endforeach
    </table>
</div>