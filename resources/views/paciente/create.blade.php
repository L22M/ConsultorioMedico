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
        <h2>Crear nuevo Paciente</h2>
        <form method="POST" action="{{ route('paciente.store') }}">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del Paciente" >
                @error('nombre')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo:</label>
                <input type="text" class="form-control" id="sexo" name="sexo" placeholder="" >
                @error('sexo')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="fechaNacimiento" class="form-label">fechaNacimiento:</label>
                <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" >
                @error('fechaNacimiento')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="edad" class="form-label">edad</label>
                <input type="text" class="form-control" id="edad" name="edad" placeholder="Ingrese la edad" >
                @error('edad')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="idNum" class="form-label">idNum:</label>
                <input type="text" class="form-control" id="idNum" name="idNum" placeholder="Ingrese el idNum" >
                @error('idNum')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="aseguradora" class="form-label">Aseguradora:</label>
                <input type="text" class="form-control" id="aseguradora" name="aseguradora" placeholder="Ingrese el nombre de la aseguradora" >
                @error('aseguradora')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">email:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Ingrese el email" >
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="domicilio" class="form-label">domicilio:</label>
                <input type="text" class="form-control" id="domicilio" name="domicilio" placeholder="Ingrese el domicilio" >
                @error('domicilio')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="v" class="form-label">telefono:</label>
                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el telefono" >
                @error('telefono')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="otros" class="form-label">otros:</label>
                <input type="text" class="form-control" id="otros" name="otros" placeholder="otros" >
                @error('otros')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

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
            
            
            
            
            
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
