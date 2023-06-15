<?php

namespace App\Http\Livewire\Usuario;

use App\Models\Bitacora;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

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
<<<<<<< HEAD
    
=======

>>>>>>> ce89abfeb4e9f214c30687adac501f67e0065756
    public function render()
    {
        $users = User::orderBy('name', 'ASC')->paginate(5);
        return view('livewire.usuario.usuario-component',['users' => $users]);
    }
}
