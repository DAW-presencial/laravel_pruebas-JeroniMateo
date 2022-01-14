@section('contectos', 'contactos')


@section('content')

<h1>Agenda Contactos</h1>

<form>

    @isset($contactos)
        
    @forelse($contactos as $contactosItem)
        
    
    
    
    
    <!-- Metemos los contactos ya existentes ocultos en el formulario -->
    <div style="align-items: left">{{ $contactosItem['contactos']}}
        <?php
        foreach ($agenda as $nom => $telf) {
            echo '<input type="hidden" name="agenda[' . $nom . ']" ';
            echo 'value="' . $telf . '"/>';
        }
        ?>
        <label>Nombre:<input type="text" name="nombre"/></label><br />
        <label>Teléfono:<input type="number" name="telefono"/></label><br />
        <input type="submit" name='submit' value="Ejecutar"/><br />
    </div>
    
    @empty
        
        <li>No hay contactos en la Agenda</li>

    @endforelse
        
</form>
@endsection