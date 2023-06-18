<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<style>
    .cabecera{
     background-color: black;
     color:rgb(232, 215, 215);
     font-size: 15px;
 
    }
    table {
    width: 80%; /* Ajusta el ancho de la tabla según tus necesidades */
    margin: 0 auto; /* Centra la tabla horizontalmente */
    font-size: 20px;
    }
    th, td {
    text-align: center; /* Centra los elementos en cada celda */
    }

 
 </style>

<body>  
    <h1 style="text-align: center; color:maroon">Listado de producto</h1>
    <table>
        <thead class = "cabecera">
            <tr>
                <th >
                    Descripcion</th>
                <th >
                    stock</th>
                <th >
                    Marca</th>
                <th >
                    Categoria</th>
            </tr>
        </thead>
        <tbody style="text-align: center">
            @foreach ($productos as $producto)
                <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                            {{-- <div>
                                <img src="{{ asset('assets') }}/img/team-2.jpg"
                                    class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                            </div> --}}
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{ $producto->descripcion }}</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex px-2 py-1">
    
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{ $producto->stock }}</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex px-2 py-1">
    
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{ $producto->marca->nombre }}</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex px-2 py-1">
    
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{ $producto->categoria->nombre }}</h6>
                            </div>
                        </div>
                    </td>

                </tr>
            @endforeach
    
        </tbody>
    </table>
    
    
</body>
</html>