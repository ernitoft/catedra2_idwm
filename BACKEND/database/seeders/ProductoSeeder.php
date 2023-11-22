<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::create([
            'nombre' => 'Mix italiano',
            'descripcion' => 'Descripcion del producto 1',
            'precio' => 1200,
            'imagen'=>"https://picsum.photos/200/300"
        ]);
        
        Producto::create([
            'nombre' => 'Soda cáustica ',
            'descripcion' => 'Descripcion del producto 2',
            'precio' => 3920,
            'imagen'=>"https://picsum.photos/200/300"
        ]);

        Producto::create([
            'nombre' => 'Castañas de Cajú',
            'descripcion' => 'Descripcion del producto 3',
            'precio' => 1320,
            'imagen'=>"https://picsum.photos/200/300"

        ]);

        Producto::create([
            'nombre' => 'Nuez',
            'descripcion' => 'Descripcion del producto 4',
            'precio' => 10050,            
            'imagen'=>"https://picsum.photos/200/300"
        ]);
    }
}
