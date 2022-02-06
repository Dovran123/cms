<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\image;
use App\Models\messenge;
use App\Models\worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class image_controller extends Controller
{
    public function index()
    {
        return view('pages.galery')->with('worker',image::orderby('updated_at','DESC')->get());
    }
    public function store(Request $request){
        $request->validate([
            'image' => ['required','mimes:jpg,jpeg,bmp,png']
        ]);
        $number = 0;
        $image = request()->file('image')->store('uploads', ['disk' => 'public']);
        $image = image::create([
            'name' => $request['name'],
            'image' => $image,
            'like' => $number
        ]);
        return view("pages.blog")->with('blog',blog::orderby('updated_at','DESC')->get())->with('imag',image::orderby('updated_at','DESC')->get());
    }
    public function delete($id)
    {
        $delete = image::destroy($id);

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
    public function likeimage(Request $request,$id){
       $pocet = $request->input('likes');
        $pocet +=1;
        $data = array('like'=>$pocet);
        DB::table('galery')->where('id',$id)->update($data);
        return response()->json([
            'success' => "hi"]);
    }
    public function dataselect($id){
       $data =  DB::table('galery')->where('id',$id)->first();
        return response()->json($data, 200);
    }
}
