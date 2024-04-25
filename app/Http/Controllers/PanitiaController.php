<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PanitiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $panitias = User::all();
        return view('panitia',compact('panitias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $panitia                                  = new User;
        $panitia->nama                            = $request->nama;
        $panitia->email                           = $request->email;
        $panitia->no_telepon                      = $request->no_telepon;
        $panitia->username                        = $request->username;
        $panitia->password                        = $request->password;
        $panitia->role                            = $request->role;
        $panitia->jenis_kelamin                   = $request->jenis_kelamin;
        $panitia->save();
         
        return redirect('panitia');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $panitia = User::whereId($id)->first();
        return view('ubah_user')->with('panitia', $panitia);
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
        $panitia                                  = User::find($id);
        $panitia->nama                            = $request->nama;
        $panitia->email                           = $request->email;
        $panitia->no_telepon                      = $request->no_telepon;
        $panitia->username                        = $request->username;
        $panitia->role                            = $request->role;
        $panitia->jenis_kelamin                   = $request->jenis_kelamin;
        $panitia->save();
        
        return redirect('panitia');
    }

    public function ubah_password($id)
    {
        $panitia = User::whereId($id)->first();
        return view('ubah_password')->with('panitia', $panitia);
    }   

    public function update_password(Request $request, $id)
    {
        $panitia                                  = User::find($id);
        $panitia->password                        = $request->password;
        $panitia->save();

        return redirect('panitia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $panitia = User::find($id);
        $panitia->delete();
        return redirect('panitia');
    }
}
