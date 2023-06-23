<tbody>
    @foreach ($hospedajes as $hospedaje)
        <tr>
            <td>{{ $hospedaje->id }}</td>
            <td>{{ $hospedaje->nombre }}</td>
            <td>{{ $hospedaje->ubicacion }}</td>
            <td>{{ $hospedaje->check_in }}</td>
            <td>{{ $hospedaje->check_out }}</td>
            <td>{{ $hospedaje->stars }}</td>
            <td>{{ $hospedaje->descripcion }}</td>
            <td>
                @if ($hospedaje->foto)
                    <img src="{{ Storage::url($hospedaje->foto) }}" alt="Foto Hospedaje">
                @endif
            </td>
            <td>
                <!-- Agrega aquí los enlaces a editar y eliminar el hospedaje -->
            </td>
        </tr>
    @endforeach
</tbody>

