<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Attribute;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $products = Product::factory(1000)->create();

        
        $this->call([
            AttributeSeeder::class
        ]);

        $attributes = Attribute::all();

        $colors = ['rojo', 'verde', 'rosado', 'rosado2', 'negro', 'amarillo'];
        $sizes = ['S', 'M', 'L', 'XL'];
        $values = array_merge($colors, $sizes);

        foreach ($products as $product){
            foreach ($attributes as $attribute){
                DB::table('attribute_product')
                    ->insert([
                        'product_id' => $product->id,
                        'attribute_id' => $attribute->id,
                        'value' => fake()->randomElement($values)
                    ]);
            }
        }
    }

    


}
