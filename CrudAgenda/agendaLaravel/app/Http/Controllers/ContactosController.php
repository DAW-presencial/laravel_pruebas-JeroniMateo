<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContactoRequest;
use App\Http\Requests\ContactoRequest;
use Illuminate\Http\Request;


use App\Models\Contactos;
use Illuminate\Support\Facades\Gate;

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
        $this->authorize('create-contactos');
         
        return view('contactos.create',[
                'contactos'=> new Contactos
            ]);
        }

        
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactoRequest $request)
    {       
        
        

       Contactos::create($request->validated()); //['nombre','telefono','tipo','created_at','updated_at']

       return redirect()->route('contactos.index')->with('status','Contacto creado');
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
    public function edit(Contactos $contactos)
    {
        return view('contactos.edit',[
            'contactos'=> $contactos
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Contactos $contactos,  ContactoRequest $request)
    {
         $contactos->update($request->validated());

         return redirect()->route('contactos.show', $contactos)->with('status','Contacto actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contactos $contactos)
    {
        $contactos->delete();

        return redirect()->route('contactos.index')->with('status','Contacto eliminado');
    }
}
