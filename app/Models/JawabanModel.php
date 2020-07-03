<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModel {

    public static function get_all(){
        $jawabans = DB::table('jawabans')->get();
        return $jawabans;
    }

    public static function save($data){
        $new_jawaban = DB::table('jawabans')->insert($data);
        return $new_jawaban;
    }

    public static function find($id){
        $satu_jawaban = DB::table('jawabans')->where('pertanyaan_id', $id)->get();
        return $satu_jawaban;
    }

}






?>