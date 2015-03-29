<?php
use Illuminate\Database\Seeder;
use ImgWhoop\Category;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoriesTableSeeder
 *
 * @author chohan
 */
class CategoriesTableSeeder extends Seeder{
    
    public function run()
    {
        DB::table('categories')->delete();

        Category::create(['category' => 'Fitness']);
        Category::create(['category' => 'Music']);
        Category::create(['category' => 'News']);
        Category::create(['category' => 'Jokes']);
        Category::create(['category' => 'History']);
        Category::create(['category' => 'Movies']);
        Category::create(['category' => 'Science']);
        Category::create(['category' => 'Space']);
        Category::create(['category' => 'Sports']);
        
    }

}
