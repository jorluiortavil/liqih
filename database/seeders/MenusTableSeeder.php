<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'id' => '1',
            'parent' => '1',
            'order' => '0',
            'nombre' => 'Inicio',
            'ruta' => 'dashboard',
            'icono' => 'fa-tachometer-alt',
            'tabla' => '',
            'criterio' => 'Inicio',
            'status' => '1'
        ]);
        DB::table('menus')->insert([
            'id' => '2',
            'parent' => '0',
            'order' => '0',
            'nombre' => 'AJUSTES',
            'ruta' => '',
            'icono' => '',
            'tabla' => '',
            'criterio' => 'AJUSTES',
            'status' => '1'
        ]);
        DB::table('menus')->insert([
            'id' => '3',
            'parent' => '2',
            'order' => '0',
            'nombre' => 'Básicos',
            'ruta' => '',
            'icono' => 'fa-cog',
            'tabla' => '',
            'criterio' => 'Básicos',
            'status' => '1'
        ]);
        DB::table('menus')->insert([
            'id' => '4',
            'parent' => '3',
            'order' => '1',
            'nombre' => 'Institución',
            'ruta' => 'entity',
            'icono' => '',
            'tabla' => '',
            'criterio' => 'Institución.ver',
            'status' => '1'
        ]);
        DB::table('menus')->insert([
            'id' => '5',
            'parent' => '3',
            'order' => '2',
            'nombre' => 'Usuarios',
            'ruta' => 'users',
            'icono' => '',
            'tabla' => '',
            'criterio' => 'Usuarios.ver',
            'status' => '1'
        ]);
        DB::table('menus')->insert([
            'id' => '6',
            'parent' => '3',
            'order' => '3',
            'nombre' => 'Roles',
            'ruta' => 'roles',
            'icono' => '',
            'tabla' => '',
            'criterio' => 'Roles.ver',
            'status' => '1'
        ]);
        DB::table('menus')->insert([
            'id' => '7',
            'parent' => '2',
            'order' => '0',
            'nombre' => 'Avanzados',
            'ruta' => '',
            'icono' => 'fa-cogs',
            'tabla' => '',
            'criterio' => 'Avanzados',
            'status' => '1'
        ]);
        DB::table('menus')->insert([
            'id' => '8',
            'parent' => '7',
            'order' => '1',
            'nombre' => 'Unidades',
            'ruta' => 'units',
            'icono' => '',
            'tabla' => '',
            'criterio' => 'Unidades.ver',
            'status' => '1'
        ]);
        DB::table('menus')->insert([
            'id' => '9',
            'parent' => '7',
            'order' => '2',
            'nombre' => 'Cargos',
            'ruta' => 'charges',
            'icono' => '',
            'tabla' => '',
            'criterio' => 'Cargos.ver',
            'status' => '1'
        ]);
        DB::table('menus')->insert([
            'id' => '10',
            'parent' => '7',
            'order' => '3',
            'nombre' => 'Reportes',
            'ruta' => 'reports',
            'icono' => '',
            'tabla' => '',
            'criterio' => 'Reportes.ver',
            'status' => '1'
        ]);
        DB::table('menus')->insert([
            'id' => '11',
            'parent' => '11',
            'order' => '0',
            'nombre' => 'Monitor',
            'ruta' => '/hospital/suministros/',
            'icono' => 'fa-chart-simple',
            'tabla' => '',
            'criterio' => 'Monitor.ver',
            'status' => '1'
        ]);
        DB::table('menus')->insert([
            'id' => '12',
            'parent' => '0',
            'order' => '0',
            'nombre' => 'SUMINISTROS',
            'ruta' => '',
            'icono' => '',
            'tabla' => '',
            'criterio' => 'SUMINISTROS',
            'status' => '1'
        ]);
        DB::table('menus')->insert([
            'id' => '13',
            'parent' => '12',
            'order' => '0',
            'nombre' => 'Recepcion',
            'ruta' => '/hospital/suministros/reception',
            'icono' => 'fa-cart-plus',
            'tabla' => '',
            'criterio' => 'Recepcion.ver',
            'status' => '1'
        ]);
        DB::table('menus')->insert([
            'id' => '14',
            'parent' => '12',
            'order' => '0',
            'nombre' => 'Almacen',
            'ruta' => '/hospital/suministros/store',
            'icono' => 'fa-kit-medical',
            'tabla' => '',
            'criterio' => 'Almacen.ver',
            'status' => '1'
        ]);
        DB::table('menus')->insert([
            'id' => '15',
            'parent' => '12',
            'order' => '0',
            'nombre' => 'Despacho',
            'ruta' => '/hospital/suministros/dispatch',
            'icono' => 'fa-pills',
            'tabla' => '',
            'criterio' => 'Despacho.ver',
            'status' => '1'
        ]);
    }
}
