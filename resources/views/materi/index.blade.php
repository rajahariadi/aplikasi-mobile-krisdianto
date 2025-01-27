@extends('index')

@section('content')
    <div class="page-title">
        <h3>Materi</h3>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="grid simple">
                <div class="grid-body no-border">
                    @if (Auth::user()->role == 'Siswa')
                    @else
                        <button class="btn btn-primary my-3"
                            onclick="window.location.href='{{ route('materi.create') }}'">Tambahkan Materi</button>
                    @endif
                    <br>
                    <table class="table table-bordered no-more-tables">
                        <thead>
                            <tr>
                                <th class="col-2 text-center">No</th>
                                <th class="text-center">Judul Materi</th>
                                <th class="text-center">Sumber Materi</th>
                                <th class="text-center">Mapel</th>
                                <th class="text-center">Kelas</th>
                                <th class="text-center">Deskripsi</th>
                                @if (Auth::user()->role == 'Siswa')
                                @else
                                    <th class="col-2 text-center">Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($materi as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->judul }}</td>
                                    <td>{{ $data->sumber }}</td>
                                    <td>{{ $data->mapel->nama }}</td>
                                    <td>{{ $data->kelas->kelas }}</td>
                                    <td>{{ $data->deskripsi }}</td>
                                    @if (Auth::user()->role == 'Siswa')
                                    @else
                                        <td>
                                            <form action="{{ route('materi.destroy', $data->id) }}" method="POST">@csrf
                                                @method('DELETE')
                                                <a href="{{ route('materi.edit', $data->id) }}"
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
