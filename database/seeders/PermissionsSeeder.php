<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private $permissions = [
        'role.list',
        'role.create',
        'role.edit',
        'role.delete',
        'companies',
        'Reports',
        'Rigs',
        'Summary',
        'Job Ticket',
        'Settings',
        'view companies',
        'Mpi Reports',
        'Lifting Reports',
        'Tublar Reports',
        'View Rigs',
        'View JobTicket Numbers',
        'View JobTickets',
        'Create JobTicket',
        'Admins',
        'Operators',
        'Report Settings',
        'Roles',
        'View MPI Reports',
        'Create MPI Reports',
        'Wire Reports',
        'Shakles Reports',
        'Thorough Examination',
        'Tools Reports',
        'Mud Reports',
        'Jar Reports',
        'Drill Pipe',
        'Drill Collar',
        'Heavy Weight',
        'view wire reports',
        'create wire report',
        'view shakles reports',
        'create shakle report',
        'view shakle sizes',
        'view thorough examinatoin',
        'create thorough examinatoin',
        'pin * pin',
        'box * pin',
        'box * box',
        'view mud reports',
        'create mud reports',
        'view jar reports',
        'create jar report',
        'view drill pipe',
        'create drill pipe',
        'view drill collar',
        'create drill collar',
        'view heavy weight',
        'create heavy weight',
        'view pin * pin',
        'view box * pin',
        'view box * box',
        'create pin * pin',
        'create box * pin',
        'create box * box',
    ];


    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        foreach ($this->permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Create admin User and assign the role to him.
        $user = User::create([
            'name' => 'owner',
            'full_name' => 'owner',
            'status' => 'Active',
            'email' => 'owner@stc.eg.com',
            'password' => Hash::make('123456789')
        ]);

        $role = Role::create(['name' => 'owner']);
        $permissions = Permission::pluck('id', 'id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
    }
}
