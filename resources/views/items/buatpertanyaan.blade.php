@extends('master')

@section('konten')

<div class="container">
  <form action="/pertanyaan" method="post">
    @csrf
  <div class="row">
    <div class="col-md-8">
      <label class="mt-4" for="isi">Judul</label>
      <input class="form-control" id="isi" name="judul" placeholder="Masukkan Judul">

      <label class="mt-4" for="isi">Pertanyaan</label>
      <textarea class="form-control" id="isi" name="isi" placeholder="Masukkan pertanyaan"></textarea>

      <button type="submit" class="btn btn-primary float-right mt-4">Submit</button>

    </div>
  </div>
  </form>
</div>


@endsection