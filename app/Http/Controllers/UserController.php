<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\View\Middleware\ShareErrorsFromSession;


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
     * @param  \App\Catedra  $catedra
     * @return \Illuminate\Http\Response
     */
    public function show(Catedra $catedra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Catedra  $catedra
     * @return \Illuminate\Http\Response
     */
    public function edit(Catedra $catedra)
    {
        //
    }

    public function editDataApi($id){
        $user = User::find($id);
        if(isset($user->id)){
            return view('users.edit_data_api')->with('user',$user);
        }
        else{
            return response()->json(['Error en cargar usuario'],400);
        }
    }

    public function resetApiToken(Request $request){
        if(!Auth::guest()){
            $userId = Auth::user()->id;
            $user = User::find($userId);
            if(isset($user->id)){
                $user->api_token = Str::random(10);
                if($user->save()){
                    Session::flash('message', 'API TOKEN generada!.');
                    Session::flash('alert', 'success');
                }
                else{
                    Session::flash('message', 'Error al cargar el usuario.');
                    Session::flash('alert', 'error');
                }
            }
            else{
                Session::flash('message', 'Error al cargar el usuario.');
                Session::flash('alert', 'error');
            }

        }
        else{
            Session::flash('message', 'Error al cargar el usuario.');
            Session::flash('alert', 'error');
        }
        return redirect()->back()->withInput();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Catedra  $catedra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catedra $catedra)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Catedra  $catedra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catedra $catedra)
    {
        //
    }
}
