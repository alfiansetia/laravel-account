@include('components.header')
<a class="btn btn-primary mb-3" href="{{ route('nasabah.create')}}">Add data</a>
<a class="btn btn-info mb-3" href="{{ route('transaksi.index')}}">Transaksi</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
        <tr>
            <td>{{ $d->id }}</td>
            <td>{{ $d->name }}</td>
        </tr>

        @endforeach
    </tbody>
</table>

@include('components.footer')