<?php

namespace App\Http\Livewire\NotaCompra;

use App\Http\Livewire\Usuario\UsuarioComponent;
use App\Models\Bitacora;
use App\Models\NotaCompra;
use App\Models\Proveedor;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class NotaCompraComponent extends Component
{
    use WithPagination;

    public $desde;
    public $hasta;
    public $proveedor;
    public $usuario;

    public function updating($name, $value)
    {
        $this->resetPage();
    }

    public function resetFilters()
    {
        $this->reset(['desde', 'hasta', 'proveedor', 'usuario']);
    }

    public function deleteCompra($membresia_id)
    {
        $compra = NotaCompra::find($membresia_id);
        $compra->delete();
        Bitacora::Bitacora('D', 'Nota Compra', $compra->id);
    }

    public function render()
    {
        $notasCompra = NotaCompra::query();

        if ($this->desde) {
            $notasCompra->where('fecha_hora', '>=', $this->desde);
        }

        if ($this->hasta) {
            $notasCompra->where('fecha_hora', '<=', $this->hasta);
        }

        if ($this->proveedor) {
            $notasCompra->where('proveedor_id', $this->proveedor);
        }

        if ($this->usuario) {
            $notasCompra->where('user_id', $this->usuario);
        }
        $proveedores = Proveedor::all();
        $usuarios = User::all();
        return view('livewire.nota-compra.nota-compra-component', ['notasCompra' => $notasCompra->orderBy('id', 'DESC')->paginate(5)], compact('proveedores', 'usuarios'));
    }
}
