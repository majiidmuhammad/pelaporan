@extends('layout.main')
@section('title', 'Dashboard')
@section('content')
<div class="row">
    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Pengaduan</p>
                            <h5 class="font-weight-bolder mb-0">
                                {{$jumlahpengaduan}}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Tanggapan</p>
                            <h5 class="font-weight-bolder mb-0">
                                {{$jumlahtanggapan}}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Masyarakat</p>
                            <h5 class="font-weight-bolder mb-0">
                                {{$jumlahmasyarakat}}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection