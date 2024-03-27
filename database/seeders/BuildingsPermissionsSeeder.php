<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class BuildingsPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'read buildings', 'desc' => 'чтение записей помещений']);
        Permission::create(['name' => 'edit buildings', 'desc' => 'изменение записей помещений']);
        Permission::create(['name' => 'delete buildings', 'desc' => 'удаление записей помещений']);
        Permission::create(['name' => 'create buildings', 'desc' => 'создание записей помещений']);
    }
}
