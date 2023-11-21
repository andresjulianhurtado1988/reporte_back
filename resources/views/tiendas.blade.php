<table>
    <thead>
        <tr>
            <th>NOMBRE</th>
            <th>DIRECCIÓN</th>
            <th>TELÉFONO</th>
            <th>CORREO-ELECTRÓNICO</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->nombre }}</td>
                <td>{{ $d->direccion }}</td>
                <td>{{ $d->telefono }}</td>
                <td>{{ $d->correo_electronico }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
