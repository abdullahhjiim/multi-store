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
            ['name' => 'Hypermarkets and Supermarkets', 'slug' => 'hypermarches-et-supermarches', 'photo_url' => 'images/categories/282436.jpg', ],
            ['name' => 'Hygiene, Beauty and Fragrance', 'slug' => 'hygiene-beaute-et-parfum', 'photo_url' => 'images/categories/301207.jpg', ],
            ['name' => 'High-Tech, Appliances', 'slug' => 'high-tech-electromenager', 'photo_url' => 'images/categories/282437.jpg', ],
            ['name' => 'Furniture', 'slug' => 'meubles-et-decoration', 'photo_url' => 'images/categories/282438.jpg', ],
            ['name' => 'Sport', 'slug' => 'sports', 'photo_url' => 'images/categories/282439.jpg', ],
            ['name' => 'Clothing / Fashion', 'slug' => 'vetements-mode', 'photo_url' => 'images/categories/282440.jpg', ],
            ['name' => 'Pet Shop', 'slug' => 'animalerie', 'photo_url' => 'images/categories/282441.jpg', ],
            ['name' => 'Child', 'slug' => 'enfants', 'photo_url' => 'images/categories/282442.jpg', ],
            ['name' => 'Pharmacy', 'slug' => 'pharmacie', 'photo_url' => 'images/categories/301208.jpg', ],
            ['name' => 'Others', 'slug' => 'autres', 'photo_url' => 'images/categories/282443.jpg', ],
            ['name' => 'DIY, garden, home', 'slug' => 'bricolage-jardin-maison', 'photo_url' => 'images/categories/282444.jpg', ],
            ['name' => 'Shoes', 'slug' => 'chaussures', 'photo_url' => 'images/categories/301206.jpg', ],
            ['name' => 'Shopping centers', 'slug' => 'centres-commerciaux', 'photo_url' => 'images/categories/301209.jpg', ],
            ['name' => 'Online stores', 'slug' => 'magasins-en-ligne', 'photo_url' => 'images/categories/1041499.jpg', ],
            ['name' => 'Finance &amp; Service', 'slug' => 'finances-services', 'photo_url' => 'images/categories/1041502.jpg', ],
            ['name' => 'Mobile &amp; internet', 'slug' => 'mobile-internet', 'photo_url' => 'images/categories/1041505.jpg', ],
            ['name' => 'Restaurants', 'slug' => 'restaurants', 'photo_url' => 'images/categories/1041508.jpg', ],
            ['name' => 'Auto Moto', 'slug' => 'auto-moto', 'photo_url' => 'images/categories/1041511.jpg', ],
        ]);
    }
}
