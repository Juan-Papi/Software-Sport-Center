<?php

namespace App\Http\Livewire\Role;

use App\Models\Bitacora;
use App\Models\Permission;
use App\Models\Role;
use Livewire\Component;

class EditarRoleComponent extends Component
{
    public $rol_id;
    public $name;
    public $selectedPermissions = [];

    public function mount($rol_id)
    {
        $rol = Role::with('permissions')->find($rol_id);
        $this->rol_id = $rol_id;
        $this->name = $rol->name;
        $this->selectedPermissions = $rol->permissions->pluck('id')->toArray();
    }

    public function updateMarca()
    {
        $this->validate([
            'name' => 'required',
        ]);
        $rol= Role::find($this->rol_id);
        $rol->name = $this->name;
        $rol->save();
        $rol->permissions()->sync($this->selectedPermissions);
        Bitacora::Bitacora('U', 'Rol', $rol->id);
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
        $permisos = Permission::all();
        return view('livewire.role.editar-role-component', compact('permisos'));
    }
}
