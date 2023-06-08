<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\{Role, Permission};

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Jefe Proceso PPP']);
        $role3 = Role::create(['name' => 'Jefe Proceso GPI']);
        $role4 = Role::create(['name' => 'Jefe Proceso CF']);
        $role5 = Role::create(['name' => 'Secretaria Proceso GPI']);        

        Permission::create(['name' => 'admin.home'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);
        Permission::create(['name' => 'home'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);
        Permission::create(['name' => 'gestionPI'])->syncRoles([$role1, $role3]);
        Permission::create(['name' => 'monitoreospfd'])->syncRoles([$role1, $role4]);
        Permission::create(['name' => 'revisionespfd'])->syncRoles([$role1, $role5]);
        Permission::create(['name' => 'practicas'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'users'])->syncRoles([$role1]);
        Permission::create(['name' => 'nosotros'])->syncRoles([$role1, $role2, $role3, $role4, $role5]);

        //En caso que su ruta tenga otro nombre diferente al grupal "practicas"
        /*

            Permission::create(['name' => 'practicas.create'])->syncRoles([$role1, $role2]);    
            Permission::create(['name' => 'practicas.store'])->syncRoles([$role1, $role2]);
            Permission::create(['name' => 'practicas.edit'])->syncRoles([$role1, $role2]);
            Permission::create(['name' => 'practicas.update'])->syncRoles([$role1, $role2]);
            Permission::create(['name' => 'practicas.index'])->syncRoles([$role1, $role2]);
            Permission::create(['name' => 'practicas.show'])->syncRoles([$role1, $role2]);
            Permission::create(['name' => 'practicas.destroy'])->syncRoles([$role1, $role2]);            

        */
    }
}
