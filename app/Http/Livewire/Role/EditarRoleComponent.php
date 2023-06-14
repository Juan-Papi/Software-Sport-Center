<?php

namespace App\Http\Livewire\Role;

use App\Models\Bitacora;
use App\Models\Role;
use Livewire\Component;

class EditarRoleComponent extends Component
{
    public $rol_id;
    public $name;
    
    public function mount($rol_id)
    {
        $marca = Role::find($rol_id);
        $this->rol_id = $rol_id;
        $this->name = $marca->name;
    }

    public function updateMarca()
    {
        $this->validate([
            'name' => 'required',
        ]);
        $rol= Role::find($this->rol_id);
        $rol->name = $this->name;
        $rol->save();
        Bitacora::Bitacora('U', 'Rol', $rol->id);
        //session()->flash('status', 'Datos actualizados!');
        return redirect(route('rol.index'))->with('status', 'Datos actualizados!');
    }

    //función para retroceder
    public function goBack()
    {
        // Lógica adicional si es necesario
        $this->redirect(route('rol.index'));
    }

    public function render()
    {
        return view('livewire.role.editar-role-component');
    }
}
