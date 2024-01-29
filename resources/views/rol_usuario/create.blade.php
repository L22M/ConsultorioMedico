<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <br>
        <h2>Crear un nuevo Rol de Usuario</h2>
        <form method="POST" action="{{ route('rol_usuario.store') }}">
            @csrf
            <div class="mb-3">
                <label for="usuario_id" class="form-label">Usuario:</label>
                <select class="form-select" id="usuario_id" name="usuario_id" >
                    <option value="" disabled selected>Selecciona un usuario</option>
                    @foreach($usuarioss as $usuarios)
                        <option value="{{ $usuarios->id }}">{{ $usuarios->nombre }}</option>
                    @endforeach
                </select>
                @error('usuario_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            
            <div class="mb-3">
                <label for="nombreRol" class="form-label">Nombre Rol:</label>
                <input type="text" class="form-control" id="nombreRol" name="nombreRol" placeholder="Ingrese el nombre del Rol" >
                @error('nombreRol')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
