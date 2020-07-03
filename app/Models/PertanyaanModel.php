<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel {

    public static function get_all(){
        $pertanyaans = DB::table('pertanyaans')->get();
        return $pertanyaans;
    }

    public static function save($data){
        $new_pertanyaan = DB::table('pertanyaans')->insert($data);
        return $new_pertanyaan;
    }

    public static function find($id){
        $satu_pertanyaan = DB::table('pertanyaans')->where('id', $id)->get();
        return $satu_pertanyaan;
    }

    public static function update($id, $request){
        $pertanyaan = DB::table('pertanyaans')
        ->where('id', $id)
        ->update([
            'judul' => $request['judul'],
            'isi' => $request['isi']
        ]);

        return $pertanyaan;
    }

    public static function destroy($id){
        $pertanyaan = DB::table('pertanyaans')
        ->where('id', $id)->delete();
    }

}






?>