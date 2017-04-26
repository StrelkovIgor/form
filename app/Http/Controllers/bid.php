<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\bid as b;
use Illuminate\Support\Facades\DB;
use Illuminate\Cookie\CookieJar;


class bid extends Controller
{
    
    public function add(Request $req){
        $bid = new b();
        if($req->isMethod('post')){
            $r = $req->all();
            $v = Validator::make($r, [
                'email' => 'email|required'
            ]);
            if(!$v->fails()){
                DB::table('bid')->where('email',$r['email'])->delete();
                $bid->email = $r['email'];
                $bid->description = $r['description'];
                $bid->save();
                \Cookie::queue('id', $r['email'], 60*60);
            }else{
                return redirect()->back()->withErrors($v->errors()); 
            }
        }
        $val = DB::table('bid')->where('email',\Cookie::get('id'))->first();
        return view('forms.bid',['data'=>$val]);
    }
    
}
