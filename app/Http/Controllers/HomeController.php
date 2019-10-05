<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $datawarung = \App\Datawarung::all();
        return view('home',['datawarung' => $datawarung]);
    }

    public function create(Request $request)
    {
       \App\Datawarung::create($request->all());
       return redirect('/home');
    }
    
    public function edit($id)
    {
        $datawarung = \App\Datawarung::find($id);
        return view('edit',['datawarung' => $datawarung]);
    }

    public function update(Request $request,$id)
    {
        $datawarung = \App\Datawarung::find($id);
        $datawarung->update($request->all());
        return redirect('/home');
    }

    public function delete($id)
    {
        $datawarung = \App\Datawarung::find($id);
        $datawarung->delete();
        return redirect('/home');
    }
}
