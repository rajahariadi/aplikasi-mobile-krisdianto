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
                        <form action="{{ route('pengguna.update', $pengguna->id) }}" method="POST">@csrf @method('PUT')
                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <div class="form-group">
                                    <label class="form-label">Full Name</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="fullname"
                                            value="{{ $pengguna->fullname }}">
                                        @error('fullname')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">NISN / NUPTK</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="nomor"
                                            value="{{ $pengguna->nomor }}">
                                        @error('nomor')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <div class="controls">
                                        <input type="email" class="form-control" name="email"
                                            value="{{ $pengguna->email }}">
                                        @error('email')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Alamat</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="alamat"
                                            value="{{ $pengguna->alamat }}">
                                        @error('alamat')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Role</label>
                                    <div class="controls">
                                        <select name="role" id="" class="form-control">
                                            <option value="Guru"
                                                {{ old('role', $pengguna->role) == 'Guru' ? 'selected' : '' }}>Guru
                                            </option>
                                            <option value="Siswa"
                                                {{ old('role', $pengguna->role) == 'Siswa' ? 'selected' : '' }}>
                                                Siswa
                                            </option>
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
