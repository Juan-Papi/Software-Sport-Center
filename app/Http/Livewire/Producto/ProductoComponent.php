<?php

namespace App\Http\Livewire\Producto;

use App\Models\Producto;
use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Livewire\WithPagination;
class ProductoComponent extends Component
{
    use WithPagination;

    public function deleteProducto($producto_id){
        $membresia = Producto::find($producto_id);
        $membresia->delete();

    }
    public function pdf()
    {
    $productos = Producto::paginate();
    
    $pdf = FacadePdf::loadView('livewire.producto.pdf', ['productos' => $productos]);
    return $pdf->stream();
    }
    public function render()
    {   
        $productos = Producto::orderBy('descripcion', 'ASC')->paginate(5);
        return view('livewire.producto.producto-component',['productos' => $productos]);
    }
}
