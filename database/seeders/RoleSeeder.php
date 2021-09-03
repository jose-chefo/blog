<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'blogger']);

        Permission::create(['name' => 'admin.home',
                            'descripcion' => 'Ver el Dashboard'])->syncRoles([$role1, $role2]); // ver o no dashboard

        Permission::create(['name' => 'admin.users.index',
                            'descripcion' => 'Ver listado de usuarios'])->syncRoles([$role1]); // ver o no ver listado de ususarios
        Permission::create(['name' => 'admin.users.edit',
                            'descripcion' => 'Asignar un role'])->syncRoles([$role1]); // crear o no nuevo role
        Permission::create(['name' => 'admin.users.update',
                            'descripcion' => 'Editar un usuario'])->syncRoles([$role1]); // editar o no un ususario 

        Permission::create(['name' => 'admin.categories.index',
                            'descripcion' => 'Ver listado de categorias'])->syncRoles([$role1, $role2]); // ver o no ver listado de categorias
        Permission::create(['name' => 'admin.categories.create',
                            'descripcion' => 'Crear categorias'])->syncRoles([$role1]); // crear o no nueva categoria
        Permission::create(['name' => 'admin.categories.edit',
                            'descripcion' => 'Editar categorias'])->syncRoles([$role1]); // editar o no categoria
        Permission::create(['name' => 'admin.categories.destroy',
                            'descripcion' => 'Eliminar categorias'])->syncRoles([$role1]); // eliminar o no categoria

        Permission::create(['name' => 'admin.tags.index',
                            'descripcion' => 'Ver listado de etiquetas'])->syncRoles([$role1, $role2]); // ver o no ver listado de etiquetas
        Permission::create(['name' => 'admin.tags.create',
                            'descripcion' => 'Crear etiquetas'])->syncRoles([$role1]); // crear o no nueva etiqueta
        Permission::create(['name' => 'admin.tags.edit',
                            'descripcion' => 'Editar etiquetas'])->syncRoles([$role1]); // editar o no etiqueta
        Permission::create(['name' => 'admin.tags.destroy',
                            'descripcion' => 'Eliminar etiquetas'])->syncRoles([$role1]); // eliminar o no etiqueta

        Permission::create(['name' => 'admin.posts.index',
                            'descripcion' => 'Ver listado de posts'])->syncRoles([$role1, $role2]); // ver o no ver listado de posts
        Permission::create(['name' => 'admin.posts.create',
                            'descripcion' => 'Crear post'])->syncRoles([$role1, $role2]); // crear o no nuevo post
        Permission::create(['name' => 'admin.posts.edit',
                            'descripcion' => 'Editar post'])->syncRoles([$role1, $role2]); // editar o no posts
        Permission::create(['name' => 'admin.posts.destroy',
                            'descripcion' => 'Eliminar post'])->syncRoles([$role1, $role2]); // eliminar o no posts
    }
}
