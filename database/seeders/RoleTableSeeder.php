<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::firstOrNew(['name' => 'admin']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => 'Admin',
            ])->save();
        }

        $role = Role::firstOrNew(['name' => 'customer']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => 'Customer',
            ])->save();
        }
    }
}
