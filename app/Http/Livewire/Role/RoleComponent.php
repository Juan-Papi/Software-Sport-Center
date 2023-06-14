<?php

namespace App\Http\Livewire\Role;

use App\Models\Bitacora;
use App\Models\Role;
use Livewire\Component;

class RoleComponent extends Component
{
    public $role_id;
    public function deleteRol($role_id)
    {
        $role = Role::find($role_id);
        $role->delete();
        Bitacora::Bitacora('D', 'Roles', $role->id);
        session()->flash('message','Rol elimidado exitosamente!');
    }

    public function render()
    {
        $roles = Role::orderBy('id', 'ASC')->paginate(15);
        return view('livewire.role.role-component', compact('roles'));
    }
}
