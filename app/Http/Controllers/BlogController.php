<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
 */
public function index()
{
    return view("pages.blog")->with('blog',blog::orderby('updated_at','DESC')->get());
}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
    //
}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
 */
public function store(Request $request)
{
    $request->validate([
    'image' => ['required','mimes:jpg,jpeg,bmp,png']
        ]);
    $image = request()->file('image')->store('uploads', ['disk' => 'public']);

    $worker = blog::create([
        'image' => $image,
        'text' => $request['text'],
        'nadpis' => $request['nadpis'],
        'category' => $request['category'],
        'tag' => $request['tag'],
        'uzivatel_fk' => $request['uzivatel_fk'],
    ]);

    return view("pages.blog")->with('blog',blog::orderby('updated_at','DESC')->get());
}

/**
 * Display the specified resource.
 *
 * @param  int  $blog
 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
 */
public function show(int $blog)
{
    return view("pages.show")->with('blog',blog::where('id',$blog)->first());
}

/**
 * Show the form for editing the specified resource.
 *
 * @param  \App\Models\blog  $blog
 * @return \Illuminate\Http\Response
 */
public function edit(blog $blog)
{
    //
}


/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \App\Models\blog  $blog
 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
 */
public function update(Request $request, int $id)
{
    $request->validate([
        'image' => ['required','mimes:jpg,jpeg,bmp,png']
    ]);
    $image = request()->file('image')->store('uploads', ['disk' => 'public']);

    $worker = blog::where('id',$id)->update([
        'image' => $image,
        'text' => $request['text'],
        'nadpis' => $request['nadpis'],
        'category' => $request['category'],
        'tag' => $request['tag'],
        'uzivatel_fk' => $request['uzivatel_fk'],
    ]);
    return view("pages.show")->with('blog',blog::where('id',$id)->first());
}

/**
 * Remove the specified resource from storage.
 *
 * @param  \App\Models\blog  $blog
 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
 */
public function destroy(int $blog)
{
    $delete = blog::where('id',$blog)->first();
    $delete->delete();

    return view("pages.home");

}
}
