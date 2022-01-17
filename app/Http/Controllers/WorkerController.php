<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\worker;
use Cassandra\Bigint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        return view('pages.users')->with('worker', Worker::orderby('updated_at', 'DESC')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {

        $request->validate([
            'phone' => ['required', 'string', 'min:8', 'max:15'],
            'adresa' => ['required'],
            'postcode' => ['required'],
            'uzivatel_fk' => ['required', 'unique:workers'],
            'state' => ['required'],
            'education' => ['required'],
            'coutry' => ['required'],
            'region' => ['required']
        ]);

        $worker = worker::create([
            'phone' => $request['phone'],
            'adresa' => $request['adresa'],
            'postcode' => $request['postcode'],
            'uzivatel_fk' => $request['uzivatel_fk'],
            'state' => $request['state'],
            'education' => $request['education'],
            'coutry' => $request['coutry'],
            'region' => $request['region']
        ]);

        return view("pages.worker");
    }

    /**
     * Display the specified resource.
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(int $id)
    {

        $user = Worker::where('id', $id)->first();

        return view('pages.profil')->with('worker', $user);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $worker
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(int $worker)
    {
        return view("pages.editprofile")->with('worker', Worker::where('id', $worker)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $worker
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function update(Request $request, int $worker)
    {

        $image = request()->file('image')->store('uploads', ['disk' => 'public']);

        worker::where('id', $worker)
            ->update([
                'image' => $image,
                'phone' => $request['phone'],
                'adresa' => $request['adresa'],
                'postcode' => $request['postcode'],
                'state' => $request['state'],
                'education' => $request['education'],
                'coutry' => $request['coutry'],
                'region' => $request['region']
            ]);
        return view("pages.worker");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $worker
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\JsonResponse
     */
    public function destroy(int $worker)
    {

        $delete = worker::where('id', $worker)->delete();
        return view('pages.users')->with('worker', Worker::orderby('updated_at', 'DESC')->get());

    }

    public function delete($id)
    {
        $delete = worker::destroy($id);

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
}
