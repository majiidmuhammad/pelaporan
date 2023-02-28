@extends('layout.main')
@section('title', 'Pengaduan')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Pengaduan</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center justify-content-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama
                                    Pelapor</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Laporan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Nik</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Foto</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pengaduan as $row)
                                <tr>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">{{ $row->tgl_pengaduan }}</p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">{{ $row->nama_pelapor }}</p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">{{ $row->isi_laporan }}</p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">{{ $row->nik }}</p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">{{ $row->foto }}</p>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">{{ $row->status }}</p>
                                    </td>
                                    <td>
                                        <a href="/petugas/formtanggapan/{{$row->id}}" class="btn btn-warning">Tanggapan</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
