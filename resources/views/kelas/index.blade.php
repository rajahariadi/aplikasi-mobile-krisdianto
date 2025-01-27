@extends('index')

@section('content')
    <div class="page-title">
        <h3>Kelas</h3>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="grid simple">
                <div class="grid-body no-border">
                    @if (Auth::user()->role == 'Siswa')
                    @else
                        <button class="btn btn-primary my-3"
                            onclick="window.location.href='{{ route('kelas.create') }}'">Tambahkan Kelas</button>
                    @endif
                    <br>
                    <table class="table table-bordered no-more-tables">
                        <thead>
                            <tr>
                                <th class="col-2 text-center">No</th>
                                <th class="text-center">Kode</th>
                                <th class="text-center">Kelas</th>
                                @if (Auth::user()->role == 'Siswa')
                                @else
                                    <th class="col-2 text-center">Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach ($kelas as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->kode }}</td>
                                    <td>{{ $data->kelas }}</td>
                                    @if (Auth::user()->role == 'Siswa')
                                    @else
                                        <td>
                                            <form action="{{ route('kelas.destroy', $data->id) }}" method="POST">@csrf
                                                @method('DELETE')
                                                <a href="{{ route('kelas.edit', $data->id) }}"
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
