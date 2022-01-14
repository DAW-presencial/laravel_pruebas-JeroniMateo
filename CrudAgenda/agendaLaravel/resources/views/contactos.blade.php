@section('contectos', 'contactos')


@section('content')

<h1>Agenda Contactos</h1>

<form>

    @isset($contactos)
        
    @forelse($contactos as $contactosItem)
        
    
    
    
    
    <!-- Metemos los contactos ya existentes ocultos en el formulario -->
    <div style="align-items: left">
        <?php
        foreach ($agenda as $contactos) {
           ?>
       
        <label><?php echo $contactos ?></label><br />
        <label><?php echo $contactos ?></label><br />
        <label><?php echo $contactos ?></label><br />
<?php
    }
    ?>
        <input/><br />
    </div>
    
    @empty
        
        <li>No hay contactos en la Agenda</li>

    @endforelse
        
</form>
@endsection