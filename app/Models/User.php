<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Personal;
use App\Models\Transaccion;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
  use HasApiTokens, HasFactory, Notifiable;
  use HasRoles;
  
  /**
   * The attributes that are mass assignable.
   *
   * @var string[]
   */
  protected $fillable = [
    'name',
    'email',
    'password',
    'location',
    'phone',
    'about',
    'role_id', // Agrega el campo role_id al array fillable
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  public function setPasswordAttribute($password)
  {
    $this->attributes['password'] = bcrypt($password);
  }

  /**
   * The attributes that should be cast.
   *
   * @var array
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  //relacion de  uno a uno con persona y user 
  public function personal()
  {
    return $this->belongsTo(Personal::class, 'personal_id');
  }

  // TODO: Implementacion de la relacion con la tabla Transacion
  //relacion de uno a muchos 
  public function transaccion(){
    return $this->hasMany(Transaccion::class);
  }
   //relacion de uno a muchos
   public function notasCompra(){
    return $this->hasMany(NotaCompra::class);
  }
}
