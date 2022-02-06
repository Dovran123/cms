<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\messenge;
use App\Models\worker;

use Illuminate\Http\Request;

class letter extends Controller
{
    public function index()
    {
        return view('pages.Contak')->with('user',User::orderby('updated_at','DESC')->get());
    }


    public function create()
    {

    }


    public function store(Request $request){

        $user = messenge::create([
            'name' => $request['name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'uzivatel_fk' => $request['uzivatel_fk'],
            'text' => $request['text']
        ]);
        return view("pages.Contak")->with('user',User::orderby('updated_at','DESC')->get());
    }

    public function show(int $id)
    {

    }


    public function edit(int $worker)
    {

    }


    public function update(Request $request, int $worker)
    {
    }


    public function destroy(int $id)
    {
        $user = messenge::where('id',$id);
        $user->delete();
        return view("pages.messenge")->with('messenge',messenge::orderby('updated_at','DESC')->get());;
    }
    public function addletter(Request $request){

        $name = $request->input('name');
        $username = $request->input('last_name');
        $email = $request->input('email');
        $uzivatel_fk = $request->input('uzivatel_fk');
        $text = $request->input('text');
        if($name !='' && $username !='' && $email != '' &&$uzivatel_fk != ''&& $text != ''){

            $data = array('name'=>$name,"last_name"=>$username,"email"=>$email,"uzivatel_fk"=>$uzivatel_fk,'text'=>$text);
            $value = messenge::insertData($data);
            if($value){
                $success = true;
                $message = "Add successful";
            }else{
                $success = false;
                $message = "Eroor";
            }

        }else{
            $success = false;
            $message = "you dont fill something input";
        }
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }
}
