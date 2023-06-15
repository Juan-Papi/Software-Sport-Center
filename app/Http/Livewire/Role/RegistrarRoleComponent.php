<?php

namespace App\Http\Livewire\Role;

use App\Models\Bitacora;
use App\Models\Permission;
use App\Models\Role;
use Livewire\Component;

class RegistrarRoleComponent extends Component
{
    public $name;
    public $selectedPermissions = [];

    public function storeRol()
    {
        $this->validate([
            'name' => 'required',
        ]);
        $rol = new Role();
        $rol->name = $this->name;
        $rol->save();
        $rol->permissions()->sync($this->selectedPermissions);
        Bitacora::Bitacora('C', 'Rol', $rol->id); 
        return redirect(route('rol.index'))->with('status', 'Nuevo Rol registrado!');
        //session()->flash('status', 'Nuevo tipo registrado!');
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
        return view('livewire.role.registrar-role-component', compact('permisos'));
    }
}
