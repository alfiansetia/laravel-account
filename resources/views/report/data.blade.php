@include('components.header')
<a class="btn btn-primary mb-3" href="{{ route('transaksi.create')}}">Add data</a>
<a class="btn btn-info mb-3" href="{{ route('transaksi.create')}}">Transaksi</a>

<form action="{{ route('report.getData') }}" method="post">
    @csrf
    <select name="id" id="id" class="form-control" required>
        <option value="">select ID</option>
        @foreach($ids as $id)
        <option value="{{ $id->id }}" {{ $curid == $id->id ? 'selected' : '' }}>{{ $id->name }}</option>
        @endforeach
    </select>
    <input type="date" name="start" class="form-control" value="{{ $from }}" required>
    @error('start')
    <div class="alert alert-danger" role="alert">
        {{ $message }}
    </div>
    @enderror
    <input type="date" name="end" class="form-control" value="{{ $to }}" required>
    @error('end')
    <div class="alert alert-danger" role="alert">
        {{ $message }}
    </div>
    @enderror
    <button class="btn btn-primary">Submit</button>
</form>

@if(count($data) > 0)

<table class="table">
    <thead>
        <tr>
            <th>Date</th>
            <th>Desc</th>
            <th>C</th>
            <th>D</th>
            <th>Amount</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
        <tr>
            <td>{{ $d->date }}</td>
            <td>{{ $d->desc }}</td>
            <td>{{ $d->status == 'C' ? 'C' : '' }}</td>
            <td>{{ $d->status == 'D' ? 'D' : '' }}</td>
            <td>{{ number_format($d->amount,0,',','.') }}</td>
        </tr>

        @endforeach
    </tbody>
</table>
@endif

@include('components.footer')