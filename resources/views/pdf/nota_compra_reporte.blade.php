<!DOCTYPE html>
<html>
<head>
    <title>Nota de Compra</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h2 {
            margin: 0;
        }

        .header span {
            font-size: 0.8em;
            color: #888;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #eee;
        }

        td, th {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
<div class="header">
    <h2>Reporte de Nota de Compra</h2>
    <span>Generado: {{ date('Y-m-d H:i:s') }}</span>
</div>

<table>
    <thead>
    <tr>
        <th>ID_COMPRA</th>
        <th>Fecha y hora</th>
        <th>Monto total</th>
        <th>Usuario</th>
        <th>Proveedor</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($notasCompra as $compra)
        <tr>
            <td>{{ $compra->id }}</td>
            <td>{{ $compra->fecha_hora }}</td>
            <td>{{ $compra->total }}</td>
            <td>{{ $compra->user->name }}</td>
            <td>{{ $compra->proveedor->name }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
