@include('components.header')
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>total</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
        <tr>
            <td>{{ $d->nasabah_id }}</td>
            <td>{{ $d->nasabah->name }}</td>
            <td>{{ $d->total }}</td>
        </tr>

        @endforeach
    </tbody>
</table>

@include('components.footer')