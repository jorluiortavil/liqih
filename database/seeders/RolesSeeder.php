<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ///Ingenier
        $info=Role::create(['name' => 'informatica']);
        $sumi=Role::create(['name' => 'suministros']);
        $farm=Role::create(['name' => 'farmacia']);

        $menus = DB::table('menus')->get();
        
        foreach($menus as $m){
        if($m->id<11){
        if($m->nombre=='Inicio'){
            Permission::create(['name' => $m->nombre])->assignRole($info);
        }else if ($m->ruta==''){
            Permission::create(['name' => $m->nombre])->assignRole($info);
        }else{
            $p1=$m->nombre.'.ver';
            $p2=$m->nombre.'.registrar';
            $p3=$m->nombre.'.modificar';
            $p4=$m->nombre.'.eliminar';
            Permission::create(['name' => $p1])->assignRole($info); 
            Permission::create(['name' => $p2])->assignRole($info); 
            Permission::create(['name' => $p3])->assignRole($info); 
            Permission::create(['name' => $p4])->assignRole($info); 
        }
        }else{
            if($m->nombre=='Inicio'){
                Permission::create(['name' => $m->nombre])->assignRole($sumi);
            }else if ($m->ruta==''){
                Permission::create(['name' => $m->nombre])->assignRole($sumi);
            }else{
                $p1=$m->nombre.'.ver';
                $p2=$m->nombre.'.registrar';
                $p3=$m->nombre.'.modificar';
                $p4=$m->nombre.'.eliminar';
                Permission::create(['name' => $p1])->assignRole($sumi); 
                Permission::create(['name' => $p2])->assignRole($sumi); 
                Permission::create(['name' => $p3])->assignRole($sumi); 
                Permission::create(['name' => $p4])->assignRole($sumi); 
            }
        }
    }
    }
}
