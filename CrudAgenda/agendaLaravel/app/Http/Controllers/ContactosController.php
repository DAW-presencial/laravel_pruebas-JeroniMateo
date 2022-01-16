<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Contactos;

class ContactosController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth')->except('index','show');
  }


    public function index()
    {
        $contactos=[
            ['nombre'=>'telefono'],
            ['nombre'=>'telefono'],
            ['nombre'=>'telefono'],
            ['nombre'=>'telefono'],
        ];


       return view('contactos.index',[
            'contactos'=> Contactos::latest()
       ]);
    }

  
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
        

        return view('contactos.show',[
            'contactos'=> Contactos::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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