@include('components.header')

<form action="{{ route('report.getData') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="id">ID</label>
        <select name="id" id="id" class="form-control" required>
            <option value="">select ID</option>
            @foreach($ids as $id)
            <option value="{{ $id->id }}" {{ $curid == $id->id ? 'selected' : '' }}>{{ $id->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="start">Start</label>
        <input type="date" id="start" name="start" class="form-control" value="{{ $from }}" required>
        @error('start')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="end">End</label>
        <input type="date" id="end" name="end" class="form-control" value="{{ $to }}" required>
        @error('end')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button class="btn btn-primary">Submit</button>
</form>

@if(count($data) > 0)

<table class="table">
    <thead>
        <tr>
            <th>Date</th>
            <th>Desc</th>
            <th>Credit</th>
            <th>Debit</th>
            <th>Amount</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
        <tr>
            <td>{{ $d->date }}</td>
            <td>{{ $d->desc }}</td>
            <td>{{ $d->status == 'C' ? number_format($d->amount,0,',','.') : '-' }}</td>
            <td>{{ $d->status == 'D' ? number_format($d->amount,0,',','.') : '-' }}</td>
            <td>{{ number_format($d->amount,0,',','.') }}</td>
        </tr>

        @endforeach
    </tbody>
</table>
@endif

@include('components.footer')