@include('components.header')
<a class="btn btn-primary mb-3" href="{{ route('transaksi.create')}}">Add data</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Desc</th>
            <th>Debit Credit</th>
            <th>Amount</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
        <tr>
            <td>{{ $d->nasabah_id }}</td>
            <td>{{ $d->date }}</td>
            <td>{{ $d->desc }}</td>
            <td>{{ $d->status }}</td>
            <td>{{ number_format($d->amount,0,',','.') }}</td>
        </tr>

        @endforeach
    </tbody>
</table>

@include('components.footer')