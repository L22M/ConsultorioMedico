<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Editar Rol</h2>
        <form method="POST" action="{{ route('rol_usuario.update', $rol_usuario) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="usuario_id" class="form-label">Persona</label>
                <select class="form-select" id="usuario_id" name="usuario_id" required>
                @foreach($usuarioss as $usuarios)
                        <option value="{{ $usuarios->id }}">{{ $usuarios->nombre }}</option>
                    @endforeach
                </select>
            </div>          
            
            <div class="mb-3">
                <label for="nombreRol" class="form-label">Nombre de Rol</label>
                <input type="text" class="form-control" id="nombreRol" name="nombreRol" placeholder="Ingrese el nombre del rol" value="{{ $rol_usuario->nombreRol }}" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
