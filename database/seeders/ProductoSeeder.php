<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            'codigo' =>'12345',
            'precio' => 10.000,
            'existencia' => 50,
            'categoria_id' => 1,
            'activo' => 1,
            'created_at'=> now()
        ]);
    }
}
