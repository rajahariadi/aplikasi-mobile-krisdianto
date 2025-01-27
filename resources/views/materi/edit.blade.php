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
                        <form action="{{ route('materi.update', $materi->id) }}" method="POST">@csrf @method('PUT')
                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <div class="form-group">
                                    <label class="form-label">Judul Materi</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="judul"
                                            value="{{ $materi->judul }}">
                                        @error('judul')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Sumber Materi</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="sumber"
                                            value="{{ $materi->judul }}">
                                        @error('sumber')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Mata Pelajaran</label>
                                    <div class="controls">
                                        <select name="mapel_id" id="" class="form-control">
                                            @foreach ($dataMapel as $mapel)
                                                <option value="{{ $mapel->id }}"
                                                    {{ old('mapel_id',$materi->mapel_id) == $mapel->id ? 'selected' : '' }}>
                                                    {{ $mapel->nama }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('mapel_id')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Kelas</label>
                                    <div class="controls">
                                        <select name="kelas_id" id="" class="form-control">
                                            @foreach ($dataKelas as $kelas)
                                                <option value="{{ $kelas->id }}"
                                                    {{ old('kelas_id', $materi->id) == $kelas->id ? 'selected' : '' }}>
                                                    {{ $kelas->kelas }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('kelas_id')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Deskripsi</label>
                                    <div class="controls">
                                        <textarea name="deskripsi" id="" cols="70" rows="5" class="form control">{{ $materi->deskripsi }}</textarea>
                                        @error('deskripsi')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="text-end">
                                    <a class="btn btn-secondary me-2" href="{{ route('materi.index') }}">Cancel</a>
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
