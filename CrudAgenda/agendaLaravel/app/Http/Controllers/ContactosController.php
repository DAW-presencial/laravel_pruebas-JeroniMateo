<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContactoRequest;
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
     
        
       return view('contactos.index',[
            'contactos'=> Contactos::latest()
       ]);
    }

  
    public function create()
    {
        return view('contactos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateContactoRequest $request)
    {       

       Contactos::create($request->validated()); //['nombre','telefono','created_at','updated_at']

       return redirect()->route('contactos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contactos $contactos)
    {
        return view('contactos.show',[
            'contactos'=> $contactos
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
