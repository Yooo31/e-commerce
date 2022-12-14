<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller {
  public function index() {
    $products = Product::all();
    $categories = Category::all();

    return view('shop', [
      'products' => $products,
      'categories' => $categories
    ]);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($slug) {
    $product = Product::where('slug', $slug)->firstOrFail();
    $category = Category::where('id', $product->category_id)->firstOrFail();

    return view('product', [
      'product' => $product,
      'category' => $category
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
