@include('components.header')
<div class="container mb-3">
    <h1>Add Data</h1>
    <form method="post" action="{{ route('nasabah.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control mb-2" name="name" id="name" placeholder="Input Name"  autofocus>
            @error('name')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
            @enderror
        </div>
        <a class="btn btn-warning" href="{{ route('nasabah.index') }}">Back</a>
        <button class="btn btn-primary" type="submit">Save</button>
    </form>
</div>
@include('components.footer')