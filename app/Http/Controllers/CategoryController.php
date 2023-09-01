<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  public function index(Request $request)
  {
    $categories = Category::whereNull('parent_id')->get();

    return view('welcome', ["categories" => $categories]);
  }

  public function show(Request $request)
  {
    // Check if request is ajax
    if ($request->ajax()) {
      // Check if categoryId is exists
      if ($request->has('categoryId')) {
        $parent_id = $request->categoryId;

        $children = Category::where('id', $parent_id)
          ->with('children')
          ->get();

        return response()->json([
          'children' => $children
        ]);
      }
    }
  }
}
