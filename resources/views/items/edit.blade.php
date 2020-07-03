@extends('master')

@section('konten')
<div class="container">
    <form method="POST" action="/pertanyaan/{{$edited[0]->id}}">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <h2>Edit Pertanyaan</h2>
                <label for="judul">Judul:</label>
                <input type="text" class="form-control" name="judul" value="{{$edited[0]->judul}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="isi">Isi:</label>
                 <input type="text" class="form-control" name="isi" value="{{$edited[0]->isi}}">
                <br>
                <button type="submit" class="btn btn-success" style="marginleft:38px">Update</button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">

            </div>
        </div>
    </form>
</div>
@endsection