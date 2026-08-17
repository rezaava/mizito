<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Cart_product;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      
        // فراخوانی سیدر شهرها
        // $this->call([
        //     CitySeeder::class,
        // ]);

        $user = new User;
        $user->name = "محمد";
        $user->family = "رضایی";
        $user->mobile = "09945443491";
        $user->password = bcrypt("123");
        $user->save();

    }
}
