<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;
use App\Models\PertanyaanModel;

class JawabanController extends Controller
{
    public function index(){
        $jawabans = JawabanModel::get_all();
        return view('items.jawaban', compact('jawabans'));
    }

    public function create(){
        return view('items.buatjawaban');
    }

    public function store(Request $request){
        $data = $request->all();
        unset($data["_token"]);
        // dd($data);
        $jawaban = JawabanModel::save($data);
        // dd($jawaban);
        $he = $data['pertanyaan_id'];
        if($jawaban){
            return redirect("/pertanyaan/$he");
        }
    }
}
