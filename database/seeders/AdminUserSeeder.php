<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        $adminRole = Role::create(['name' => 'administrador']);
        
        $admin = User::create([
            'name' => 'Editorial Edisal',
            'email' => 'victoriadeoro@editorialedisal.com',
            'password' => Hash::make('gee/182#SU'),
        ]);
        
        $admin->assignRole($adminRole);

    }
}

