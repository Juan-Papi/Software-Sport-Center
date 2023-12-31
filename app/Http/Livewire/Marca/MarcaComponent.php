<?php

namespace App\Http\Livewire\Marca;

use App\Models\Bitacora;
use Livewire\Component;
use App\Models\Marca;
use Livewire\WithPagination;
class MarcaComponent extends Component
{
    use WithPagination;
    
    public function deleteMarca($marca_id)
    {
        $marca = Marca::find($marca_id);
        $marca->delete();
        Bitacora::Bitacora('D', 'Marca', $marca->id);   
    }
    public function render()
    {   
        $marcas= Marca::orderBy('nombre', 'ASC')->paginate(5);
        return view('livewire.marca.marca-component', ['marcas' => $marcas]);
    }
}
