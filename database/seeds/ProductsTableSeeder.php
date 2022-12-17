<?php

use App\Category;
use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Mangue / Passion',
            'slug' => 'mangue-passion',
            'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, minima.',
            'price' => 6,
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit rerum consequatur deleniti dicta tempora. Eaque ad inventore officiis obcaecati itaque repellendus, ipsam illum illo facere similique tenetur aliquid cupiditate! Obcaecati quisquam officia aperiam deleniti quasi provident distinctio repudiandae totam. Rerum.',
            'category_id' => Category::all()->random()->id
        ]);

        Product::create([
            'name' => 'Mangue / Citro,',
            'slug' => 'mangue-citron',
            'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, minima.',
            'price' => 60,
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit rerum consequatur deleniti dicta tempora. Eaque ad inventore officiis obcaecati itaque repellendus, ipsam illum illo facere similique tenetur aliquid cupiditate! Obcaecati quisquam officia aperiam deleniti quasi provident distinctio repudiandae totam. Rerum.',
            'category_id' => Category::all()->random()->id
        ]);

        Product::create([
            'name' => 'Mangue',
            'slug' => 'mangue',
            'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, minima.',
            'price' => 1,
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit rerum consequatur deleniti dicta tempora. Eaque ad inventore officiis obcaecati itaque repellendus, ipsam illum illo facere similique tenetur aliquid cupiditate! Obcaecati quisquam officia aperiam deleniti quasi provident distinctio repudiandae totam. Rerum.',
            'category_id' => Category::all()->random()->id
        ]);

        Product::create([
            'name' => 'Fraise',
            'slug' => 'fraise',
            'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, minima.',
            'price' => 10,
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit rerum consequatur deleniti dicta tempora. Eaque ad inventore officiis obcaecati itaque repellendus, ipsam illum illo facere similique tenetur aliquid cupiditate! Obcaecati quisquam officia aperiam deleniti quasi provident distinctio repudiandae totam. Rerum.',
            'category_id' => Category::all()->random()->id
        ]);

        Product::create([
            'name' => 'Coca',
            'slug' => 'coca',
            'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, minima.',
            'price' => 8,
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit rerum consequatur deleniti dicta tempora. Eaque ad inventore officiis obcaecati itaque repellendus, ipsam illum illo facere similique tenetur aliquid cupiditate! Obcaecati quisquam officia aperiam deleniti quasi provident distinctio repudiandae totam. Rerum.',
            'category_id' => Category::all()->random()->id
        ]);

        Product::create([
            'name' => 'Framboise',
            'slug' => 'framboise',
            'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, minima.',
            'price' => 15,
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit rerum consequatur deleniti dicta tempora. Eaque ad inventore officiis obcaecati itaque repellendus, ipsam illum illo facere similique tenetur aliquid cupiditate! Obcaecati quisquam officia aperiam deleniti quasi provident distinctio repudiandae totam. Rerum.',
            'category_id' => Category::all()->random()->id
        ]);

        Product::create([
            'name' => 'Pêche',
            'slug' => 'peche',
            'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, minima.',
            'price' => 26,
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit rerum consequatur deleniti dicta tempora. Eaque ad inventore officiis obcaecati itaque repellendus, ipsam illum illo facere similique tenetur aliquid cupiditate! Obcaecati quisquam officia aperiam deleniti quasi provident distinctio repudiandae totam. Rerum.',
            'category_id' => Category::all()->random()->id
        ]);

        Product::create([
            'name' => 'Concombre',
            'slug' => 'concombre',
            'details' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, minima.',
            'price' => 506,
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit rerum consequatur deleniti dicta tempora. Eaque ad inventore officiis obcaecati itaque repellendus, ipsam illum illo facere similique tenetur aliquid cupiditate! Obcaecati quisquam officia aperiam deleniti quasi provident distinctio repudiandae totam. Rerum.',
            'category_id' => Category::all()->random()->id
        ]);
    }
}
