<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Hypermarkets and Supermarkets', 'slug' => 'hypermarches-et-supermarches', 'photo_url' => 'images/categories/282436.jpeg', ],
            ['name' => 'Hygiene, Beauty and Fragrance', 'slug' => 'hygiene-beaute-et-parfum', 'photo_url' => 'images/categories/301207.jpeg', ],
            ['name' => 'High-Tech, Appliances', 'slug' => 'high-tech-electromenager', 'photo_url' => 'images/categories/282437.jpeg', ],
            ['name' => 'Furniture', 'slug' => 'meubles-et-decoration', 'photo_url' => 'images/categories/282438.jpeg', ],
            ['name' => 'Sport', 'slug' => 'sports', 'photo_url' => 'images/categories/282439.jpeg', ],
            ['name' => 'Clothing / Fashion', 'slug' => 'vetements-mode', 'photo_url' => 'images/categories/282440.jpeg', ],
            ['name' => 'Pet Shop', 'slug' => 'animalerie', 'photo_url' => 'images/categories/282441.jpeg', ],
            ['name' => 'Child', 'slug' => 'enfants', 'photo_url' => 'images/categories/282442.jpeg', ],
            ['name' => 'Pharmacy', 'slug' => 'pharmacie', 'photo_url' => 'images/categories/301208.jpeg', ],
            ['name' => 'Others', 'slug' => 'autres', 'photo_url' => 'images/categories/282443.jpeg', ],
            ['name' => 'DIY, garden, home', 'slug' => 'bricolage-jardin-maison', 'photo_url' => 'images/categories/282444.jpeg', ],
            ['name' => 'Shoes', 'slug' => 'chaussures', 'photo_url' => 'images/categories/301206.jpeg', ],
            ['name' => 'Shopping centers', 'slug' => 'centres-commerciaux', 'photo_url' => 'images/categories/301209.jpeg', ],
            ['name' => 'Online stores', 'slug' => 'magasins-en-ligne', 'photo_url' => 'images/categories/1041499.jpeg', ],
            ['name' => 'Finance &amp; Service', 'slug' => 'finances-services', 'photo_url' => 'images/categories/1041502.jpeg', ],
            ['name' => 'Mobile &amp; internet', 'slug' => 'mobile-internet', 'photo_url' => 'images/categories/1041505.jpeg', ],
            ['name' => 'Restaurants', 'slug' => 'restaurants', 'photo_url' => 'images/categories/1041508.jpeg', ],
            ['name' => 'Auto Moto', 'slug' => 'auto-moto', 'photo_url' => 'images/categories/1041511.jpeg', ],
        ]);
    }
}
