<?php

namespace App\Http\Livewire\Usuario;

use App\Models\Bitacora;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class UsuarioComponent extends Component
{
    use WithPagination;

    public $user_id;

    //Implementacion  de metodo  para eliminar un registo de usuario
    public function deleteUsuario($user_id)
    {
        $user = User::find($user_id);
        $user->delete();
        Bitacora::Bitacora('D', 'Usuario', $user->id);
        session()->flash('message','Usuario elimidado exitosamente!');
    }
    
    public function render()
    {
        $users = User::orderBy('name', 'ASC')->paginate(15);
        $roles = Role::all();
        return view('livewire.usuario.usuario-component',['users' => $users, 'roles' => $roles]);
    }
}
