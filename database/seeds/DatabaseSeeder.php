<?php

use App\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $array = ['Elektronik', 'Mainan', 'Makanan & Minuman', 'Pakaian', 'Perawatan Wajah', 'Peralatan Dapur'];

        // foreach($array as $category)
        // {
        //     Category::create
        //     (
        //         [
        //             'category_name' => $category
        //         ]
        //     );
        // }

        $this->call(AdminSeeder::class);
    }
}
