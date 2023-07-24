<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData['title'] = "Admin Page - Admin - SoundWave";
        $viewData['products'] = Product::all();
        return view('admin.product.index')->with('viewData', $viewData);
    }
    public function store(Request $request){
      $request->validate([
        'name' => "required|max:255",
        'price' => "required",
        'description' => "required",
        'image' => 'required'

      ])
    }
}
