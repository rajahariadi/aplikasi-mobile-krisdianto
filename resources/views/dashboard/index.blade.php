@extends('index')

@section('content')
    <div class="page-title">
        <h3>Dashboard </h3>
    </div>
    <div id="container">
        <div class="row 2col">
            <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
                <div class="tiles blue added-margin">
                    <div class="tiles-body">
                        <div class="tiles-title"> TOTAL MATERI </div>
                        <div class="heading"> <span class="animate-number" data-value="{{ $totalMateri }}"
                                data-animation-duration="1200">0</span> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 spacing-bottom-sm spacing-bottom">
                <div class="tiles green added-margin">
                    <div class="tiles-body">
                        <div class="tiles-title"> TOTAL PENGGUNA </div>
                        <div class="heading"> <span class="animate-number" data-value="{{ $totalPengguna }}"
                                data-animation-duration="1000">0</span> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 spacing-bottom">
                <div class="tiles red added-margin">
                    <div class="tiles-body">
                        <div class="tiles-title"> TOTAL MAPEL </div>
                        <div class="heading"> <span class="animate-number" data-value="{{ $totalMapel }}"
                                data-animation-duration="1200">0</span> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="tiles purple added-margin">
                    <div class="tiles-body">
                        <div class="tiles-title"> TOTAL KELAS </div>
                        <div class="row-fluid">
                            <div class="heading"> <span class="animate-number" data-value="{{ $totalKelas }}"
                                    data-animation-duration="700">0</span> </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endsection
