
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


        <!-- Styles -->
        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        
        

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="card">
                            <h3 class="card-header">Lista de contactos</h3>
                            <div class="card-body">
                                <p class="card-text">
                                    <label for="">C&oacute;digo</label>
                                    <input type="text" class="form-control" readonly value="{{$directorios->codigoEntrada}}">
                                    <label for="">Nombre</label>
                                    <input type="text" class="form-control" readonly value="{{$directorios->nombre}}">
                                    <label for="">Apellido</label>
                                    <input type="text" class="form-control" readonly value="{{$directorios->apellido}}">

                                    <p>
                                        <button class="btn btn-primary">Agregar nuevo contacto</button>
                                        <a href="{{route('directorio.inicio')}}" class="btn btn-info">Regresar</a>
                                    </p>

                                    <table class="table">
                                        <thead>                                            
                                            <th scope="col" name="nombre">Id</th>
                                            <th scope="col" name="nombre">Nombre</th>
                                            <th scope="col" name="tipoElectrodomestico">Apellido</th>
                                            <th scope="col" name="precio">Tel&eacute;fono</th>                                            
                                            <th scope="col">Eliminar</th>
                                        </thead>
                                        <tbody>

                                        <!--@foreach($contactos as $contacto)
    <tr>
        <th scope="row">{{ $contacto->id }}</th>
        <td>{{ $contacto->nombre }}</td>
        <td>{{ $contacto->apellido }}</td>
        <td>{{ $contacto->telefono }}</td>
    </tr>
@endforeach-->

                    </tbody>
                                        </tbody>

                                    
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </body>
</html>
