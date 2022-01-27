<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContactoRequest;
use App\Http\Requests\ContactoRequest;
use App\Models\Contacto;
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
           'newContacto'=> new Contacto,
            'contactos'=> Contacto::latest()
       ]);
    }

  
    public function create()
    {
        $this->authorize('create', $contacto = new Contacto);
         
        return view('contactos.create',[

                'contactos'=> $contacto
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
        
        

       Contacto::create($request->validated()); //['nombre','telefono','tipo','created_at','updated_at']

       $this->authorize('create', $contacto = new Contacto);


       return redirect()->route('contactos.index')->with('status','Contacto creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contacto $contacto)
    {
        return view('contactos.show',[
            'contactos'=> $contacto
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacto $contacto)
    {

        $this->authorize('update', $contacto);

        return view('contactos.edit',[
            'contactos'=> $contacto
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Contacto $contacto,  ContactoRequest $request)
    {

        $this->authorize('update', $contacto);

         $contacto->update($request->validated());

         return redirect()->route('contactos.show', $contacto)->with('status','Contacto actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacto $contacto)
    {

        $this->authorize('delete', $contacto);

        $contacto->delete();

        return redirect()->route('contactos.index')->with('status','Contacto eliminado');
    }
}
