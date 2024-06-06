@extends ('layouts.layouts')

@section('content')
    <section style="margin-top: 100px">
        <div class="container col-xxl-6">
            <h3 class="fw-bold mb-3">Login dek </h3>
            <form action="/login" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Masukan Email</label>
                    <input type="email" name="email" class="form-control">
                </div>

                <div class="formgroup mb-3">
                    <label for="">Masukkan Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Login dek</button>
            </form>
        </div>
    </section>
@endsection    