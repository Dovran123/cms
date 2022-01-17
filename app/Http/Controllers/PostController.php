<?php

namespace App\Http\Controllers;

use App\Models\messenge;
use App\Models\User;
use App\Models\worker;
use http\Message;
use Illuminate\Http\Request;

class PostController extends Controller
{
public function update(Request $request, int $id)
{
    User::where('id',$id)
        ->update([
            'name' =>$request['name'],
            'last_name' =>$request['last_name'],
            'user_type' =>$request['user_type']
        ]);
    return view("pages.Nastavenie")->with('user',User::orderby('updated_at','DESC')->get());;
}
public function destroy(int $id)
{
    $user = User::where('id',$id);
    $user->delete();
    return view("pages.home");
}
public function show($id){
    $idcka = User::find($id);
    if ($id == 'about') {
        return view('pages.about');
    }
    if ($id == 'ourstaff')
        return view('pages.ourstaff');
    if ($id == 'whatweoffer') {
        return view('pages.whatweoffer');
    }
    if ($id == 'home') {
        return view('pages.home');
    }
    if ($id == 'nastavenie') {
        return view('pages.Nastavenie')->with('user',User::orderby('updated_at','DESC')->get());
    }
    if ($id == 'profil') {
        return view('pages.worker');
    }
    if ($id == 'mesenge') {
        return view('pages.messenge')->with('messenge',messenge::orderby('updated_at','DESC')->get());
    }

}
public function index()
{
    return view('pages.home');
}
public function store(Request $request)
{


}
    public function delete($id)
    {
        $delete = User::destroy($id);

        // check data deleted or not
        if ($delete == 1) {
            $success = true;
            $message = "User deleted successfully";
        } else {
            $success = true;
            $message = "User not found";
        }

        //  return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }

//
}
