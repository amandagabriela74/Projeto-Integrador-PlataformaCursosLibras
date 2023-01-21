<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //#user = User::where('id', $id)->first();
        if (!$user = User::find($id)) //if para caso o usuário n exista
            return back();

        return view('users.profile', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!$user = Auth::user())
            return redirect()->route('users.index');

        return view('users.edit-profile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!$user = Auth::user())
            return redirect()->route('users.index');
        //return view('users.edit', compact('user'));
        //dd($request->all()); //ver todas requests

        $data = $request->only('name', 'email');
        if ($request->password)
            $data['password'] = bcrypt($request->password);

        if ($request->image) {
            if ($user->image && Storage::exists($user->image)) {
                Storage::delete($user->image);
            }

            $path = $request->image->store('users');
            $data['image'] = $path;
        }
        //dd($request->image);

        $user->update($data);

        return back();
    }

    public function showCertificate($id)
    {
        //#user = User::where('id', $id)->first();
        if (!$user = User::find($id)) //if para caso o usuário n exista
            return back();

        return view('users.certificates', compact('user'));
    }


    public function generatePDF()
    {
        $user = User::all();
        $pdf = PDF::loadView('users.certificate', compact('user'))->setPaper('a4', 'landscape');

        return $pdf->stream('certificado.pdf');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
