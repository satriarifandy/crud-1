@extends('master')

@section('konten')
<div class="container">
    <div class="card mt-4">
            <div class="card-header">
                Title:&nbsp&nbsp&nbsp&nbsp{{$pertanyaan[0]->isi}}
            </div>
            <div class="card-body" style="padding-right: 0px;">
                <div class="row">
                    <div class="col-9">
                        <h5 class="card-title mb-4">Posted by:  </h5>
                        <p class="card-text">Content: <br>{{$pertanyaan[0]->isi}}</p>
                    </div>
                    <div class="col-3">
                        <p>Created at: {{$pertanyaan[0]->created_at}}</p>
                        <p>Updated at: {{$pertanyaan[0]->updated_at}}</p>
                    </div>
                </div>
            </div>
    </div>
    <h4 class="ml-4">Answers:</h4>
    
    <div class="col">
    @foreach ($jawabans as $jawab)
    <div class="row ml-4" style="">
        <div class="card" >
            <div class="card-body">
                <p class="card-text">{{$loop->iteration}}.  {{$jawab->isi}}</p>
            </div>
        </div>      
    </div>
    @endforeach
    </div>
    

    <form action="/pertanyaan/{pertanyaan_id}" method="post">
    @csrf
    <div class="form-group">
    <input class="form-control mb-2" type="hidden" name="pertanyaan_id" value="{{$pertanyaan[0]->id}}">
    <textarea class="form-control" style="margin-top: 100px;" id="isi" name="isi" placeholder="Enter your answers"></textarea>
    </div>
    <button type="submit" class="btn btn-primary" style="">Submit</button>
</form>

</div>
@endsection