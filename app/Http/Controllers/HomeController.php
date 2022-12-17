<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Product;

class HomeController extends Controller {

  public function home() {
    $products = Product::inRandomOrder()->take(8)->get();
    return view('home', [
      'products' => $products
    ]);
  }

  public function contact() {
    return view('contact');
  }

  public function shop() {
    return view('shop');
  }

  public function product() {
    return view('product');
  }

  public function cart() {
    return view('cart');
  }

  public function checkout() {
    return view('checkout');
  }

  public function success() {
    return view('success');
  }

  public function orders() {
    return view('orders');
  }
}