<?php

namespace App\Http\Livewire\Permiso;

use App\Models\Bitacora;
use App\Models\Permission;
use Livewire\Component;

class PermisoComponent extends Component
{
    public $permiso_id;

    public function deletePermiso($permiso_id)
    {
        $permiso = Permission::find($permiso_id);
        $permiso->delete();
        Bitacora::Bitacora('D', 'Permiso', $permiso->id);
        session()->flash('message','Permiso elimidado exitosamente!');
    }

    public function render()
    {
        $permisos = Permission::orderBy('id', 'ASC')->paginate(31);
        return view('livewire.permiso.permiso-component', compact('permisos'));
    }
}
