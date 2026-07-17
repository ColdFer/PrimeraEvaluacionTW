<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Vehículos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h2 class="mb-4">
        Registro de Vehículos
    </h2>


    <a href="/vehiculos/create" class="btn btn-primary mb-3">
        Nuevo Vehículo
    </a>


    @if(session('mensaje'))

        <div class="alert alert-success">
            {{ session('mensaje') }}
        </div>

    @endif



    <table class="table table-bordered">

        <thead class="table-dark">

            <tr>
                <th>ID</th>
                <th>Placa</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Color</th>
                <th>Año</th>
                <th>Acciones</th>
            </tr>

        </thead>


        <tbody>


        @forelse($vehiculos as $vehiculo)

            <tr>

                <td>{{ $vehiculo->id }}</td>

                <td>{{ $vehiculo->placa }}</td>

                <td>{{ $vehiculo->marca }}</td>

                <td>{{ $vehiculo->modelo }}</td>

                <td>{{ $vehiculo->color }}</td>

                <td>{{ $vehiculo->anio }}</td>


                <td>

                    <a href="/vehiculos/{{ $vehiculo->id }}/edit"
                       class="btn btn-warning btn-sm">
                        Editar
                    </a>


                    <form action="/vehiculos/{{ $vehiculo->id }}"
                          method="POST"
                          style="display:inline">


                        @csrf

                        @method('DELETE')


                        <button class="btn btn-danger btn-sm">
                            Eliminar
                        </button>


                    </form>


                </td>

            </tr>


        @empty

            <tr>

                <td colspan="7" class="text-center">
                    No existen vehículos registrados
                </td>

            </tr>


        @endforelse


        </tbody>

    </table>


</div>


</body>

</html>