@extends('index')

@section('content')
    <div class="page-title">
        <h3>Mata Pelajaran</h3>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="grid simple">
                <div class="grid-body no-border">
                    <br>
                    <div class="row">
                        <form action="{{ route('kelas.update', $kelas->id) }}" method="POST">@csrf @method('PUT')
                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <div class="form-group">
                                    <label class="form-label">Kode Kelas</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="kode"
                                            value="{{ $kelas->kode }}">
                                        @error('kode')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Kelas</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" name="kelas"
                                            value="{{ $kelas->kelas }}">
                                        @error('kelas')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="text-end">
                                    <a class="btn btn-secondary me-2" href="{{ route('kelas.index') }}">Cancel</a>
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
