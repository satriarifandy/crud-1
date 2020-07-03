@extends('master')

@section('konten')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Jawaban</th>
    </tr>
  </thead>
  <tbody>
  
    @foreach ($jawabans as $jawab)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{ $jawab-> isi }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection