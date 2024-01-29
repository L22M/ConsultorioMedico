<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
</head>

<body>
<nav class="navbar navbar-expand-lg  fixed-top">
        <div class="container-fluid">
            
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="usuarios">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rol_usuario">Roles Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="paciente">Paciente</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Pacientes</h1>
        <a href="/paciente/create" class="btn btn-dark mb-4">Crear Nuevo</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">sexo</th>
                    <th scope="col">fechaNacimiento</th>
                    <th scope="col">edad</th>
                    <th scope="col">idNum</th>
                    <th scope="col">aseguradora</th>
                    <th scope="col">email</th>
                    <th scope="col">domicilio</th>
                    <th scope="col">telefono</th>
                    <th scope="col">otros</th>
                    <th scope="col">usuario_Id</th>
                    <th scope="col">Acciones</th>
                                   
                </tr>
            </thead>
            <tbody>
                @foreach ($pacientess as $paciente)
                <tr>
                    <th scope="row">{{ $paciente->id }}</th>                                                 
                    <td>{{ $paciente->nombre }}</td>             
                    <td>{{ $paciente->sexo }}</td>
                    <td>{{ $paciente->fechaNacimiento }}</td>             
                    <td>{{ $paciente->edad }}</td>
                    <td>{{ $paciente->idNum }}</td>             
                    <td>{{ $paciente->aseguradora }}</td>
                                 
                    <td>{{ $paciente->email }}</td>
                    <td>{{ $paciente->domicilio }}</td>             
                    <td>{{ $paciente->telefono }}</td>
                    <td>{{ $paciente->otros }}</td> 
                    <td>{{ $paciente->usuario_id }}</td>            
                    
                    <td>
                        <div style="display: flex;  align-items: center;">
                            <a href="{{ route('paciente.edit', $paciente->id) }}" class="btn btn-primary" style="margin-right: 10px;">Editar</a>

                            <form action="{{ route('paciente.destroy', $paciente->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>