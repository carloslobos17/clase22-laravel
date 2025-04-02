<div>
    <h1>Listado de productos</h1>

    <table>
        <thead>
            <tr>
                <th>Productos</th>
                <th>Descripcion</th>
                <th>Color</th>
                <th>Talla</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->color}}</td>
                    <td>{{$product->size}}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
</div>
