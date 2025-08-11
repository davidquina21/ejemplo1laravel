
<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Stock</th>

        </tr>
    </thead>
    <tbody>
        @foreach($productos2 as $producto2)
            <tr>
                <td>{{ $cliente->id}}</td>
                <td>{{ $cliente->nombre}}</td>
                <td>{{ $cliente->precio}}</td>
                <td>{{ $cliente->stock }}</td>

            </tr>
        @endforeach
    </tbody>
</table>
