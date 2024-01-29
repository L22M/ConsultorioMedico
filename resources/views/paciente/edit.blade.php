<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Paciente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <br>
        <h2>Editar Paciente</h2>
        <form method="POST" action="{{ route('paciente.update', $paciente) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $paciente->nombre }}">
                @error('nombre')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo:</label>
                <input type="text" class="form-control" id="sexo" name="sexo" value="{{ $paciente->sexo }}">
                @error('sexo')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento:</label>
                <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" value="{{ $paciente->fechaNacimiento }}">
                @error('fechaNacimiento')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Resto de los campos... -->

            <div class="mb-3">
                <label for="usuario_id" class="form-label">Usuario:</label>
                <select class="form-select" id="usuario_id" name="usuario_id">
                    <option value="" disabled>Selecciona un usuario</option>
                    @foreach($usuarioss as $usuario)
                        <option value="{{ $usuario->id }}" {{ $paciente->usuario_id == $usuario->id ? 'selected' : '' }}>{{ $usuario->nombre }}</option>
                    @endforeach
                </select>
                @error('usuario_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
