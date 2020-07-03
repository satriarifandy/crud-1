@extends('master')

@section('konten')
<div class="container">
    <div class="row">
        <div class="col-4">
            <h4 class="mt-4">Judul:</h4>
            <h3 class=" mb-3">{{$pertanyaan[0]->judul}}</h3>
            <h4>Pertanyaan dengan ID {{$pertanyaan[0]->id}}:</h4>
            <p>{{$pertanyaan[0]->isi}}</p>
            <h4 class="mt-4 mb-3">Jawaban:</h4>
            
            @if (count($jawabans) !== 0)
                @foreach ($jawabans as $jawab)
                    <p>{{$loop->iteration}}. {{$jawab->isi}}</p>
                @endforeach
            @else
                <p>Belum ada Jawaban</p>
            @endif
        </div>
        <div class="col-7" >
            <h4 class="mt-4" style="float:right;">Tanggal dibuat: {{$pertanyaan[0]->created_at}}</h4>
            <h4 style="float:right;">Tanggal diubah: {{$pertanyaan[0]->updated_at}}</h4>
        </div>
    </div>
    
    
    <form action="/pertanyaan/{pertanyaan_id}" method="post">
    @csrf
    <div class="form-group">
    <input class="form-control mb-2" id="pertanyaan_id" name="pertanyaan_id" placeholder="Masukkan ID pertanyaan">
    <input class="form-control" id="isi" name="isi" placeholder="Enter jawaban">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
@endsection