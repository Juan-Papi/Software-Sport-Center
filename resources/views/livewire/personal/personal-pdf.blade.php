<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
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
    <h1 style="text-align:center">Listado de personal</h1>
    <table style="text-align:center">
        <thead class="cabecera" >
            <tr>
                <th>
                    Nombre</th>
                 <th>
                   apellido</th>
                <th>
                    Contacto</th>
                <th>
                    funcion</th>
                <th>
                     Sueldo</th>
                <th>
                    Estado</th>
                <th>
                    Inicio de Contrato</th>
                <th>
                     Fin de Contrato</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($personales as $personal)
                <tr>
                    <td>
                        <p class="mb-0 text-sm">{{ $personal->nombre }}</p>
                                        
                    </td>
                    <td>
                        <p class="text-xs text-secondary mb-0">{{ $personal->apellidos }}
                        </p>
                        {{-- <p class="text-xs text-secondary mb-0">{{$personal->nombre}}</p> --}}
                    </td>
                    <td>
                        <p style="font-size: 12px">{{ $personal->telefono }}</p>
                        {{-- <p class="text-xs text-secondary mb-0">{{$personal->nombre}}</p> --}}
                    </td>
                    <td>
                        <p class="text-sm font-weight-bold mb-0">{{ $personal->cargo }}</p>
                       
                    </td>
                    <td class="align-middle text-center text-sm">
                        <p class="text-xm font-weight-bold mb-0">{{ $personal->salario }} bs.</p>
                    </td>
                    <td>
                        <p class="align-middle text-center text-sm">
                            @if ($personal->estado == 'Activo')
                            <span class="badge badge-sm bg-gradient-success">Activo</span>
                            @else
                            <span class="badge badge-sm bg-gradient-secondary">Desactivo</span>
                            @endif
                        </p>
                    </td>
                    <td class="align-middle text-center">
                        <span
                            class="text-secondary text-xs font-weight-bold">{{ $personal->fecha_inicio_contrato }}</span>
                    </td>
                    <td class="align-middle text-center">
                        <span
                            class="text-secondary text-xs font-weight-bold">{{ $personal->fecha_fin_contrato }}</span>
                    </td>
                    
                
                </tr>
            @endforeach
           
    
        </tbody>
    </table>
</body>
</html>