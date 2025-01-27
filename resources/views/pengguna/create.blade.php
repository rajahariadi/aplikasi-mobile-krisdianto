@extends('index')

@section('content')
    <div class="page-title">
        <h3>Pengguna</h3>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="grid simple">
                <div class="grid-body no-border">
                    <br>
                    <div class="row">
                        <form action="{{ route('pengguna.store') }}" method="POST">@csrf
                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <div class="form-group">
                                    <label class="form-label">Full Name</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="fullname">
                                        @error('fullname')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">NISN / NUPTK</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="nomor">
                                        @error('nomor')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <div class="controls">
                                        <input type="email" class="form-control" name="email">
                                        @error('email')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Password</label>
                                    <div class="controls">
                                        <input type="password" class="form-control" name="password">
                                        @error('password')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Alamat</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="alamat">
                                        @error('alamat')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Role</label>
                                    <div class="controls">
                                        <select name="role" id="" class="form-control">
                                            <option selected hidden value="">-- Pilih Role --</option>
                                            <option value="Guru">Guru</option>
                                            <option value="Siswa">Siswa</option>
                                        </select>
                                        @error('role')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="text-end">
                                    <a class="btn btn-secondary me-2" href="{{ route('pengguna.index') }}">Cancel</a>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
