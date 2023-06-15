<?php

namespace App\Http\Livewire\Area;

use App\Models\Area;
use Livewire\Component;
use Livewire\WithFileUploads;

class AreaRegistrar extends Component
{
    use WithFileUploads;
    public $name;
    public $descripcion;
    public $estado;
    public $tipo;

    public function updated($fields){
        $this->validateOnly($fields, [
            'name' => 'required',
            'descripcion' => 'required',
            'estado' => 'required',
            'tipo' => 'required',
        ]);
        
    }

    public function storeArea()
    {
    $this->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'estado' => 'required',
            'tipo' => 'required',
    ]);

    $area = new Area();
    $area->name = $this->name;
    $area->descripcion = $this->descripcion;
    $area->estado = $this->estado;
    $area->tipo = $this->tipo;
    $area->save();
    return redirect(route('area.index'))->with('status', 'Nuevo area registrado!');

    }
   
    public function goBack()
    {
      // Lógica adicional si es necesario
      $this->redirect(route('area.index'));
    }


    public function render()
    {
        return view('livewire.area.area-registrar');
    }
}
