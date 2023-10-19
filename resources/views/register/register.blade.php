@extends('login.main')
@section('login')
    <div class="row">
        <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
                <img src="{{ asset('img/logo.jpg') }}" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Register</h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="/register">
                        @csrf
                        <div class="row">
                            <div class="form-group col-10">
                                <label for="name">Nama</label>
                                <input id="name" type="text" class="form-control" @error('name') is-ivalid @enderror
                                    name="name" placeholder="Masukan Nama Anda" autofocus>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-10">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control"
                                    @error('email') is-ivalid @enderror name="email" placeholder="Masukan Email Anda">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-10">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control"
                                    @error('password') is-ivalid @enderror name="password"
                                    placeholder="Masukan Password Anda">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg">
                                Register
                            </button>
                        </div>
                    </form>
                    <small class="d-block text-center mt-3">Sudah Punya Akun? <a href="/login">Login Disini!</a></small>
                </div>
            </div>
            <div class="simple-footer">
                Copyright &copy; Stisla 2018
            </div>
        </div>
    </div>
@endsection
