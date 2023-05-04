@include('components.header')
<div class="container mb-3">
    <h1>Add Data</h1>
    <form method="post" action="{{ route('transaksi.store') }}">
        @csrf
        <div class="form-group">
            <label for="id">ID</label>
            <select name="id" id="id" class="form-control" required>
                <option value="">select id</option>
                @foreach($ids as $id)
                <option value="{{ $id->id }}">{{ $id->name }}</option>
                @endforeach
            </select>
            @error('id')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" id="date" class="form-control" required>
            @error('date')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="desc">Desc</label>
            <!-- <input type="text" class="form-control mb-2" name="desc" id="desc" placeholder="Input Desc" required> -->
            <select name="desc" id="desc" class="form-control">
                <option value="Setor Tunai">Setor Tunai</option>
                <option value="Beli Pulsa">Beli Pulsa</option>
                <option value="Bayar Listrik">Bayar Listrik</option>
                <option value="Tarik Tunai">Tarik Tunai</option>
            </select>
            @error('desc')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>
            @error('status')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" name="amount" id="amount" class="form-control" placeholder="Input Amount" required>
            @error('amount')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
            @enderror
        </div>
        <a class="btn btn-warning" href="{{ route('transaksi.index') }}">Back</a>
        <button class="btn btn-primary" type="submit">Save</button>
    </form>
</div>
@include('components.footer')