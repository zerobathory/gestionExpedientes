<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
/**
 * Class RoleSeeder
 * 
 * Se encarga de gestionar los permisos y roles de los usuarios mediante spatie.
 * 
 * @namespace Database\Seeders
 * 
 * @author Uriel Castillo
 */
class RoleSeeder extends Seeder
{
    /**
   * Se dan de alta los roles y permisos en la BD/ se sincronizan mediante spatie
   * 
   * @return Spatie\Permission\Models\Permission Genera los permisos en la BD.
   * 
   * 
   * 
   * @author Uriel Castillo
   */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
		$administrador = Role::create(['name' => 'administrador', 'guard_name' => 'web']);
        $usuario = Role::create(['name' => 'usuario', 'guard_name' => 'web']);

        //Permisos

		Permission::create(['name' => 'users.create'])->syncRoles([$administrador]);
		Permission::create(['name' => 'users.read'])->syncRoles([$administrador]);
		Permission::create(['name' => 'users.update'])->syncRoles([$administrador]);
		Permission::create(['name' => 'users.delete'])->syncRoles([$administrador]);

		Permission::create(['name' => 'expedientes.create'])->syncRoles([$administrador, $usuario]);
		Permission::create(['name' => 'expedientes.read'])->syncRoles([$usuario]);
		Permission::create(['name' => 'expedientes.readAll'])->syncRoles([$administrador]);
		Permission::create(['name' => 'expedientes.update'])->syncRoles([$administrador, $usuario]);
		Permission::create(['name' => 'expedientes.delete'])->syncRoles([$administrador]);
		Permission::create(['name' => 'expedientes.restore'])->syncRoles([$administrador]);

		$administradorUser= User::create([
			'nombre' => fake()->firstName(),
			'primer_apellido' => fake()->lastName(),
			'segundo_apellido' => fake()->lastName(),
			'email' => 'administrador@test.com',
			'email_verified_at' => now(),
			'password' => Hash::make('password'),
			'remember_token' => Str::random(10)
		])->assignRole('administrador');

        $usuarioUser= User::create([
			'nombre' => fake()->firstName(),
			'primer_apellido' => fake()->lastName(),
			'segundo_apellido' => fake()->lastName(),
			'email' => 'usuario@test.com',
			'email_verified_at' => now(),
			'password' => Hash::make('password'),
			'remember_token' => Str::random(10)
		])->assignRole('usuario');
    }
}
