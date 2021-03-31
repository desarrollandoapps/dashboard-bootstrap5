<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Rol;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rolAdmin = Rol::where('nombre', 'administrador')->first();
        $rolEstudiante = Rol::where('nombre', 'estudiante')->first();

        $admin = User::create([
            'name' => 'Usuario Administrador',
            'email' => 'admin@admin.com',
            'password' => Hash::make('secret')
        ]);
        $estudiante = User::create([
            'name' => 'Usuario Estudiante',
            'email' => 'estudiante@estudiante.com',
            'password' => Hash::make('secret')
        ]);
        $admin->roles()->attach($rolAdmin);
        $estudiante->roles()->attach($rolEstudiante);
    }
}
