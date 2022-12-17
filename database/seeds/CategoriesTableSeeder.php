<?php

use App\Category;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CategoriesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    $now = Carbon::now()->toDateTimeString();

    Category::insert([
      [
        'name' => 'Fruité',
        'slug' => 'fruite',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'name' => 'Mentolé',
        'slug' => 'mentole',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'name' => 'Boisson',
        'slug' => 'boisson',
        'created_at' => $now,
        'updated_at' => $now
      ],
      [
        'name' => 'Bonbon',
        'slug' => 'bonbon',
        'created_at' => $now,
        'updated_at' => $now
      ]
    ]);
  }
}
