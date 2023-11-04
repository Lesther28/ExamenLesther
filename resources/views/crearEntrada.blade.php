
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
                            <h3 class="card-header">Crear Nueva Entrada Directorio</h3>
                            <div class="card-body">
                                <p class="card-text">
                                    <form  method="POST" action="{{route('directorio.store')}}">

                                    @csrf
                                    @method('POST')

                                        <label for="">C&oacute;digo</label>
                                        <input type="text" name="codigo" class="form-control">
                                        <label for="">Nombre</label>
                                        <input type="text" name="nombre" class="form-control">
                                        <label for="">Apellido</label>
                                        <input type="text" name="apellido" class="form-control">
                                        <label for="">Tel&eacute;fono</label>
                                        <input type="text" name="telefono" class="form-control">
                                        <label for="">Correo</label>
                                        <input type="text" name="correo" class="form-control">
                                        
                                        
                                        <button type="submit" class="btn btn-success">Guardar</button>
                                        <a href="{{route('directorio.inicio')}}" class="btn btn-info">Regresar</a>
                                        
                                    </form>
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
