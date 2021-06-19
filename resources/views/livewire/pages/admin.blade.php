<div class="container">
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Email</th>
        </tr>
        @foreach ($collection as $item)
            <tr>
                <td>{{  $item->id }}</td>
                <td>{{  $item->name }}</td>
                <td>{{  $item->email }}</td>
            </tr>
        @endforeach
    </table>

    {{ $collection->links() }}
</div>
