@section('nombre', 'contactos')

@section('contactos')
    

        <!-- Creamos el formulario de introducción de un nuevo contacto -->
        <h2>Agenda Contactos</h2>
        <form>
            <!-- Metemos los contactos ya existentes ocultos en el formulario -->
            <div style="align-items: left">
                <?php
                foreach ($contactos as $nombre => $telefono) {
                    echo '<input type="hidden" name="contactos[' . $nombre . ']" ';
                    echo 'value="' . $telefono . '"/>';
                }
                ?>
                <label>Nombre:<input type="text" name="nombre"/></label><br />
                <label>Teléfono:<input type="number" name="telefono"/></label><br />
                <input type="submit" name='submit' value="Ejecutar"/><br />
            </div>
        </form>


@endsection