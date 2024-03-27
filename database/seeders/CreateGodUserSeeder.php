<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\User;

class CreateGodUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $godUser = User::create([
            'name' => 'Админ',
            'surname' => 'Админов',
            'patronymic' => 'Админович',
            'phone' => '+79000000000',
            'address' => 'ул. Администраторов, д. 1а',
            'department' => 'IT',
            'email' => 'admin@mail.ru',
            'password' => Hash::make('admin'),
        ]);

        Role::create([
            'name' => 'god-user',
        ]);

        $godUser->assignRole('god-user');
    }
}
