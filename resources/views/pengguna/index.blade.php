@extends('index')

@section('content')
    <div class="page-title">
        <h3>Pengguna</h3>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="grid simple">
                <div class="grid-body no-border">
                    @if (Auth::user()->role == 'Siswa')
                    @else
                        <button class="btn btn-primary my-3"
                            onclick="window.location.href='{{ route('pengguna.create') }}'">Tambahkan Pengguna</button>
                    @endif
                    <br>
                    <table class="table table-bordered no-more-tables">
                        <thead>
                            <tr>
                                <th class="col-2 text-center">No</th>
                                <th class="text-center">Fullname</th>
                                <th class="text-center">NISN / NUPTK</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Role</th>
                                @if (Auth::user()->role == 'Siswa')
                                @else
                                    <th class="col-2 text-center">Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($pengguna as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->fullname }}</td>
                                    <td>{{ $data->nomor }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->alamat }}</td>
                                    <td>{{ $data->role }}</td>
                                    @if (Auth::user()->role == 'Siswa')
                                    @else
                                        <td>
                                            <form action="{{ route('pengguna.destroy', $data->id) }}" method="POST">@csrf
                                                @method('DELETE')
                                                <a href="{{ route('pengguna.edit', $data->id) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
