<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;

class ResultController extends Controller
{
    public function index(){
        $data['results']=Result::all();
        return view("home",$data);

    }
    public function storeResult(Request $req){
    // this is for insert result
    $data = $req->validate([
        'name'=>'required',
        'father'=>'required',
        'contact'=>'required',
        'school_name'=>'required',
        'math'=>'required',
        'sci'=>'required',
        'sst'=>'required',
        'hindi'=>'required',
        'eng'=>'required'
    ]);
    Result::create($data);
    return redirect()->route("home");
}
public function updateResult(Request $req){


}
public function deleteResult(Request $req, $id){

    $data = Result::find($id);
    $data->delete();
    return redirect()->back();
}
}
