<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\NotaCompra;
use Illuminate\Http\Request;
use PDF;

class NotaCompraController extends Controller
{
    public function generarPDF($nota_compra_id)
    {
        $nota_compra = NotaCompra::with('productos')->findOrFail($nota_compra_id);

        $pdf = PDF::loadView('nota_compra', ['nota_compra' => $nota_compra]);

        return $pdf->download('nota_compra_' . $nota_compra_id . '.pdf');
    }
    public function reporte(Request $request)
    {
        $notasCompra = NotaCompra::query();

        if ($request->has('desde')) {
            $notasCompra->where('fecha_hora', '>=', $request->desde);
        }

        if ($request->has('hasta')) {
            $notasCompra->where('fecha_hora', '<=', $request->hasta);
        }

        if ($request->has('proveedor')) {
            $notasCompra->where('proveedor_id', $request->proveedor);
        }

        if ($request->has('usuario')) {
            $notasCompra->where('user_id', $request->usuario);
        }

        $notasCompra = $notasCompra->orderBy('id', 'DESC')->get();

        $pdf = PDF::loadView('pdf.nota_compra_reporte', ['notasCompra' => $notasCompra]);
        return $pdf->download('reporte.pdf');
    }
}
