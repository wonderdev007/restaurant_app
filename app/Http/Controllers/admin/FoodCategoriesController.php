<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FoodCategory;

class FoodCategoriesController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        // return $categories = FoodCategory::All();
        $categories = FoodCategory::paginate(5);
        return view('admin/food-categories/all', ['categories' => $categories]);
    }

    public function create() {
        $categories = FoodCategory::All();
        return view('admin/food-categories/create');
    }

    public function store() {
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'image_url' => ['required', 'string']
        ]);

        $category = new FoodCategory();
        $category->title = request('title');
        $category->description = request('description');
        $category->image_url = request('image_url');
        $category->save();

        return redirect('/admin/food-categories');
    }

    public function showEditCategories($id) {
        $category = FoodCategory::find($id);

        return view('admin/food-categories/edit', ['category' => $category]);
    }

    public function update($id) {
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'image_url' => ['required', 'string']
        ]);

        $category = FoodCategory::find($id);
        $category->title = request('title');
        $category->description = request('description');
        $category->image_url = request('image_url');
        $category->save();

        return redirect('/admin/food-categories');
    }

    public function delete($id) {
        $category = FoodCategory::find($id);
        $category->delete();
        return redirect('/admin/food-categories');
    }
}
