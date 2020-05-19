<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\FoodItem;
use App\FoodCategory;

class FoodItemsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        // return $food_items = FoodItem::All();
        $food_items = FoodItem::paginate(15);
        return view('admin/food-items/all', ['food_items' => $food_items]);
    }

    public function create() {
        $categories = FoodCategory::All();
        return view('admin/food-items/create', ['categories' => $categories]);
    }

    public function store() {
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string'],
            'category_id' => ['required', 'integer'],
            'description' => ['required', 'string'],
            // 'image_url' => ['string']
        ]);

        $food_item = new FoodItem();
        $food_item->title = request('title');
        $food_item->price = request('price');
        $food_item->category_id = request('category_id');
        $food_item->description = request('description');
        $food_item->image_url = request('image_url');
        $food_item->save();

        return redirect('/admin/food-items');
    }

    public function showEditItem($id) {
        $food_item = FoodItem::find($id);
        $categories = FoodCategory::All();

        return view('admin/food-items/edit', ['food_item' => $food_item, 'categories' => $categories]);
    }

    public function update($id) {
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string'],
            'category_id' => ['required', 'integer'],
            'description' => ['required', 'string'],
            // 'image_url' => ['string']
        ]);

        $food_item = FoodItem::find($id);
        $food_item->title = request('title');
        $food_item->price = request('price');
        $food_item->category_id = request('category_id');
        $food_item->description = request('description');
        $food_item->image_url = request('image_url');
        $food_item->save();

        return redirect('/admin/food-items');
    }

    public function delete($id) {
        $food_item = FoodItem::find($id);
        $food_item->delete();
        return redirect('/admin/food-items');
    }
}
