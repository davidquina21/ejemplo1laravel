
<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>CANTIDAD</th>
            <th>TOTAL</th>
            <th>PRODUCTO ID</th>
             <th>PEDIDO ID</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pedido_productos as $pedido_producto)
            <tr>
                <td>{{ $pedido_producto->cantidad}}</td>
                <td>{{ $pedido_producto->total}}</td>
                <td>{{ $pedido_producto->producto_id}}</td>
                <td>{{ $pedido_producto->pedido_id}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
