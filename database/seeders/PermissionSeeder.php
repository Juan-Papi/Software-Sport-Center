<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permisos = [
            [
                'name' => 'Ver Bitacora',
                'descripcion' => 'bitacora.index',
            ],
            [
                'name' => 'Vista Role',
                'descripcion' => 'rol.index',
            ],
            [
                'name' => 'Crear Role',
                'descripcion' => 'rol.registrar',
            ],
            [
                'name' => 'Editar Role',
                'descripcion' => 'rol.editar',
            ],
            [
                'name' => 'Vista Permiso',
                'descripcion' => 'permiso.index',
            ],
            [
                'name' => 'Crear Permiso',
                'descripcion' => 'permiso.registrar',
            ],
            [
                'name' => 'Editar Permiso',
                'descripcion' => 'permiso.editar',
            ],
            [
                'name' => 'Ver Usuario',
                'descripcion' => 'usuario',
            ],
            [
                'name' => 'Crear Usuario',
                'descripcion' => 'usuario-registro',
            ],
            [
                'name' => 'Editar Usuario',
                'descripcion' => 'usuario-editar',
            ],
            [
                'name' => 'Vista Personal',
                'descripcion' => 'perosnal.index',
            ],
            [
                'name' => 'Crear Personal',
                'descripcion' => 'personal-registro',
            ],
            [
                'name' => 'Editar Personal',
                'descripcion' => 'personal-editar',
            ],
            [
                'name' => 'Vista Servicio',
                'descripcion' => 'servicio.index',
            ],
            [
                'name' => 'Crear Servicio',
                'descripcion' => 'servicio.registrar',
            ],
            [
                'name' => 'Editar Servicio',
                'descripcion' => 'servicio.editar',
            ],
            [
                'name' => 'Vista Tipo Servicio',
                'descripcion' => 'tservicio.index',
            ],
            [
                'name' => 'Crear Tipo Servicio',
                'descripcion' => 'tservicio.registrar',
            ],
            [
                'name' => 'Editar Tipo Servicio',
                'descripcion' => 'tservicio.editar',
            ],
            [
                'name' => 'Ver Membresia',
                'descripcion' => 'membresia',
            ],
            [
                'name' => 'Crear Membresia',
                'descripcion' => 'membresia-registrar',
            ],
            [
                'name' => 'Editar Membresia',
                'descripcion' => 'membresia-editar',
            ],
            [
                'name' => 'Ver Proveedor',
                'descripcion' => 'proveedor.index',
            ],
            [
                'name' => 'Crear Proveedor',
                'descripcion' => 'proveedor-registro',
            ],
            [
                'name' => 'Editar Proveedor',
                'descripcion' => 'proveedor-editar',
            ],
            [
                'name' => 'Ver Marca',
                'descripcion' => 'marca.index',
            ],
            [
                'name' => 'Crear Marca',
                'descripcion' => 'marca.registrar',
            ],
            [
                'name' => 'Editar Marca',
                'descripcion' => 'marca.editar',
            ],
            [
                'name' => 'Ver Categoria',
                'descripcion' => 'categoria.index',
            ],
            [
                'name' => 'Crear Categoria',
                'descripcion' => 'categoria.registrar',
            ],
            [
                'name' => 'Editar Categoria',
                'descripcion' => 'categoria.editar',
            ],
            [
                'name' => 'Ver Producto',
                'descripcion' => 'producto.index',
            ],
            [
                'name' => 'Crear Producto',
                'descripcion' => 'producto.registrar',
            ],
            [
                'name' => 'Editar Producto',
                'descripcion' => 'producto.editar',
            ],
            [
                'name' => 'Ver Nota Compra',
                'descripcion' => 'nota_compra.index',
            ],
            [
                'name' => 'Crear Nota Compra',
                'descripcion' => 'nota_compra.registrar',
            ],
            [
                'name' => 'Editar Nota Compra',
                'descripcion' => 'nota_compra.editar',
            ],
        ];
        
        foreach ($permisos as $permiso) {
            Permission::create($permiso);
        }
    }
}
