<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PeopleController extends Controller
{
    public function queries(){
         $response = DB::table('peoples')->get();
        // $response = DB::table('peoples')->where('age','21')->get();
        // $response = DB::table('peoples')->first();
        // $response = DB::table('peoples')->insert([
        //     'name'=>'Rameen',
        //     'age'=>'23',
        //     'about'=>'crazy'
        // ]);
        // $response=[$response];
        return view('/peoples',['data'=>$response]);
        // if($response){
        //     echo "Data inserted";

        // }
        // else{
        //     echo "Data inserted";
        // }
    }
}
