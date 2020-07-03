@extends('master')

@section('konten')
<form action="/buatjawaban" method="post">
    @csrf
  <div class="form-group">
    <label for="isi">Jawaban</label>
    <input class="form-control" id="isi" name="isi" placeholder="Enter jawaban">
    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection