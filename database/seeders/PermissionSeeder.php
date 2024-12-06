<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permisos=[
            //table article
            'Ver Article',
            'Crear Article',
            'Editar Article',
            'Eliminar Article',
            //table category
            'Ver categoria',
            'Crear categoria',
            'Editar categoria',
            'Eliminar categoria',
            //table incomedetail
            'Ver ingresoDetalle',
            'Crear ingresoDetalle',
            'Editar ingresoDetalle',
            'Eliminar ingresoDetalle',
            //table income
            'Ver ingreso',
            'Crear ingreso',
            'Editar ingreso',
            'Eliminar ingreso',
            //table person
            'Ver persona',
            'Crear persona',
            'Editar persona',
            'Eliminar persona',
        ];
        
    }
}
