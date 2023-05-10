<div class="container">
    <h1>Categorías</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td><a href="#">Editar</a>
                        <a href="#">Eliminar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
