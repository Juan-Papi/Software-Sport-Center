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
    }
    th, td {
    text-align: center; /* Centra los elementos en cada celda */
    }

 
 </style>
<body>
    <h1 style="text-align:center">LISTA DE NOTA DE VENTAS</h1>
    <table>
        <thead class = "cabecera">
            <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-dark">
                    ID_COMPRA
                </th>
                
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-dark">
                    Fecha y hora
                </th>
                
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-dark">
                    Monto total
                </th>
                
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-dark">
                    Usuario
                </th>
                
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-dark">
                    Proveedor
                </th>
                
                <th class="text-secondary opacity-7"></th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($notasCompra as $compra)
                <tr>
                    <td>
                        <div class="d-flex px-2 py-1">

                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{ $compra->id }}</h6>

                            </div>
                        </div>

                    </td>
                    <td>
                        <div class="d-flex px-2 py-1">

                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{ $compra->fecha_hora }}</h6>

                            </div>
                        </div>

                    </td>

                    <td>
                        <div class="d-flex px-2 py-1">

                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">BS. {{ $compra->total }}</h6>

                            </div>
                        </div>

                    </td>
                    <td>
                        <div class="d-flex px-2 py-1">

                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{ $compra->user->name }}</h6>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex px-2 py-1">

                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">{{ $compra->proveedor->name }}</h6>
                            </div>
                        </div>
                    </td>                    
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>