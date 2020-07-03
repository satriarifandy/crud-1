<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

class PertanyaanController extends Controller 
{
    public function index(){
        $pertanyaans = PertanyaanModel::get_all();
        // var_dump($pertanyaans);
        return view('items.pertanyaan', compact('pertanyaans'));
    }

    public function create(){
        return view('items.buatpertanyaan');
    }

    public function store(Request $request){
        $data = $request->all();
        unset($data["_token"]);
        
        // dd($data);
        $pertanyaans = PertanyaanModel::save($data);
        // dd($jawaban);

        if($pertanyaans){
            return redirect('/pertanyaan');
        }
    }

    public function detail($id){
        $jawabans = JawabanModel::find($id);
        $pertanyaan = PertanyaanModel::find($id);
        // dd($pertanyaan->isi);
        return view('items.detailpertanyaan', compact('pertanyaan', 'id', 'jawabans'));
    }

    public function edit($id){
        $edited = PertanyaanModel::find($id);
        // dd($edited[0]->id);
        return view('items.edit', compact('edited'));
    }

    public function update($id, Request $request){
        $updated = PertanyaanModel::update($id, $request->all());
        return redirect('/pertanyaan');
    }

    public function destroy($id){
        $hapus = PertanyaanModel::destroy($id);
        return redirect('/pertanyaan');
    }
}
