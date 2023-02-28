@extends('layout.main')
@section('title', 'Form Tanggapan')
@section('content')

<div class="row">
    <div class="col-12">
        <form action="/petugas/inserttanggapan" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-floating">
            <input type="hidden" class="form-control" name="pengaduan_id" value="{{ $pengaduan->id }}"></input>
        </div>

        <div class="form-floating mb-1">
            <input type="text" name="petugas_id" ></input>
            <label for="floatingTextarea2">Petugas</label>
        </div>

        <div class="form-floating">
            <textarea class="form-control" name="tanggapan" placeholder="Leave a comment here" id="floatingTextarea2"
                style="height: 100px"></textarea>
            <label for="floatingTextarea2">Tanggapan</label>
            <td>
                <button type="submit" class="btn btn-primary">Submit</button>
            </td>
        </div>
        </form>
    </div>
</div>

@endsection
