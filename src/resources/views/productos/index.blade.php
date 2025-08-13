
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
        @foreach($productos as $producto)
            <tr>
                <td>{{ $producto->id}}</td>
                <td>{{ $producto->nombre}}</td>
                <td>{{ $producto->precio}}</td>
                <td>{{ $producto->stock}}</td>

            </tr>
        @endforeach
    </tbody>
</table>
