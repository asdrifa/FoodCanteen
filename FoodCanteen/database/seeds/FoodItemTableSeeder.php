<?php

use Illuminate\Database\Seeder;

class FoodItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $fooditem = new \App\FoodItem([
			'imagepath' => 'D:\xampp\htdocs\FoodCanteen\public\img\Chicken Burger.jpg',
			 'title' => 'Chicken Burger',
			 'description' => 'Soft Bun,Chicken,Cheese,Salad',
			 'price' => 80
	   ]);
	   $fooditem ->save();
	   
	   $fooditem = new \App\FoodItem([
			'imagepath' => 'D:\xampp\htdocs\FoodCanteen\public\img\Chicken Broast.jpg',
			 'title' => 'Chicken Broast',
			 'description' => 'Hot & Crispy',
			 'price' => 100
	   ]);
	   $fooditem ->save();
	   
	   $fooditem = new \App\FoodItem([
			'imagepath' => 'D:\xampp\htdocs\FoodCanteen\public\img\Club Sandwitch.jpeg',
			 'title' => 'Club Sandwitch',
			 'description' => 'SOft Bread,Chicken,Egg,Mozarello,Cheese,Salad',
			 'price' => 110
	   ]);
	   $fooditem ->save();
	   
	   $fooditem = new \App\FoodItem([
			'imagepath' => 'D:\xampp\htdocs\FoodCanteen\public\img\Hot Dog.jpeg',
			 'title' => 'Hot Dog',
			 'description' => 'Bun,Chicken Sausage,Cheese,Salad',
			 'price' => 75
	   ]);
	   $fooditem ->save();
	   
	   $fooditem = new \App\FoodItem([
			'imagepath' => 'D:\xampp\htdocs\FoodCanteen\public\img\Pizza Delight.jpg',
			 'title' => 'Pizza Delight',
			 'description' => 'Chicken,Shrimp,Tomato,Black Bean,Mozarello',
			 'price' => 180
	   ]);
	   $fooditem ->save();
	   
	   $fooditem = new \App\FoodItem([
			'imagepath' => 'D:\xampp\htdocs\FoodCanteen\public\img\Fried Rice.jpg',
			 'title' => 'Fried Rice',
			 'description' => 'Rice,Egg.Bean,Vegetable',
			 'price' => 95
	   ]);
	   $fooditem ->save();
    }
}
