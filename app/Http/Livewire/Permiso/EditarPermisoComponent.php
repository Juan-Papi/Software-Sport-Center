<?php

namespace App\Http\Livewire\Permiso;

use App\Models\Bitacora;
use App\Models\Permission;
use Livewire\Component;

class EditarPermisoComponent extends Component
{
    public $permiso_id;
    public $name, $descripcion;
    
    public function mount($permiso_id)
    {
        $permiso = Permission::find($permiso_id);
        $this->permiso_id = $permiso_id;
        $this->name = $permiso->name;
        $this->descripcion = $permiso->descripcion;
    }

    public function updatePermiso()
    {
        $this->validate([
            'name' => 'required',
        ]);
        $permiso= Permission::find($this->permiso_id);
        $permiso->name = $this->name;
        $permiso->descripcion = $this->descripcion;
        $permiso->save();
        Bitacora::Bitacora('U', 'Permiso', $permiso->id);
        //session()->flash('status', 'Datos actualizados!');
        return redirect(route('permiso.index'))->with('status', 'Datos actualizados!');
    }

    //función para retroceder
    public function goBack()
    {
        // Lógica adicional si es necesario
        $this->redirect(route('permiso.index'));
    }
    
    public function render()
    {
        return view('livewire.permiso.editar-permiso-component');
    }
}
