<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Vehículo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4">Registrar Vehículo</h2>

    <form action="/vehiculos" method="POST">

        @csrf

        <div class="mb-3">
            <label>Placa</label>

            <input
                type="text"
                name="placa"
                class="form-control"
                value="{{ old('placa') }}">

            @error('placa')
                <small class="text-danger">{{ $message }}</small>
            @enderror

        </div>

        <div class="mb-3">
            <label>Marca</label>

            <input
                type="text"
                name="marca"
                class="form-control"
                value="{{ old('marca') }}">

            @error('marca')
                <small class="text-danger">{{ $message }}</small>
            @enderror

        </div>

        <div class="mb-3">
            <label>Modelo</label>

            <input
                type="text"
                name="modelo"
                class="form-control"
                value="{{ old('modelo') }}">

            @error('modelo')
                <small class="text-danger">{{ $message }}</small>
            @enderror

        </div>

        <div class="mb-3">
            <label>Color</label>

            <input
                type="text"
                name="color"
                class="form-control"
                value="{{ old('color') }}">

            @error('color')
                <small class="text-danger">{{ $message }}</small>
            @enderror

        </div>

        <div class="mb-3">
            <label>Año</label>

            <input
                type="number"
                name="anio"
                class="form-control"
                value="{{ old('anio') }}">

            @error('anio')
                <small class="text-danger">{{ $message }}</small>
            @enderror

        </div>

        <button class="btn btn-primary">
            Guardar
        </button>

        <a href="/vehiculos" class="btn btn-secondary">
            Cancelar
        </a>

    </form>

</div>

</body>
</html>