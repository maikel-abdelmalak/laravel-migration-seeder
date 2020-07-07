<?php

use Illuminate\Database\Seeder;
use App\Product;
use Faker\Generator as Faker;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(Faker $faker)
    {
        $prodotti = config('products');
        foreach ($prodotti as $dati_prodotto) {

            $nuovo_prodotto = new Product();
            $nuovo_prodotto->name = $dati_prodotto['name'];
            $nuovo_prodotto->description = $dati_prodotto['description'];
            $nuovo_prodotto->code = $dati_prodotto['code'];
            $nuovo_prodotto->save();

        }

        for ($i=0; $i <10 ; $i++) {
            $nuovo_prodotto = new Product();
            $nuovo_prodotto->name = $faker->firstName;
            $nuovo_prodotto->description = $faker->realText($maxNbChars = 200, $indexSize = 2);
            $nuovo_prodotto->code = $faker->numberBetween($min = 1000000000, $max = 2147483644);
            $nuovo_prodotto->save();
        }
    }
}
