@include('components.header')
<a class="btn btn-primary mb-3" href="{{ route('transaksi.create')}}">Add data</a>
<a class="btn btn-info mb-3" href="{{ route('transaksi.create')}}">Transaksi</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <!-- <th>Amount</th> -->
            <th>total</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
        <tr>
            <td>{{ $d->nasabah_id }}</td>
            <td>{{ $d->nasabah->name }}</td>
            <!-- <td>{{ $d->amount }}</td> -->
            <td>{{ $d->total }}</td>
        </tr>

        @endforeach
    </tbody>
</table>

@include('components.footer')