@extends('master')

@section('konten')
<div class="container">
<a href="/pertanyaan/create" class="btn btn-primary mt-4 mb-4">Buat Pertanyaan Baru</a>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">Pertanyaan</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    
      @foreach ($pertanyaans as $tanya)
      <tr>
        <th scope="row" style="width: 5%">{{$loop->iteration}}</th>
        <td style="width: 20%">{{ $tanya-> judul }}</td>
        <td>{{ $tanya-> isi }}</td>
        <td style="width: 20%">
          <a class="btn btn-info" href="/pertanyaan/{{$tanya->id}}" role="button">Detail</a>
          <a class="btn btn-warning" href="/pertanyaan/{{$tanya->id}}/edit" role="button">Edit</a>
          <form action="/pertanyaan/{{$tanya->id}}" style="display: inline" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" role="button"><i class="fas fa-trash-alt"></i></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection