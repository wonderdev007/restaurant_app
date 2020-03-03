<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Member;


class MemberController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $members = Member::paginate(5);
        return view('admin/members/all-members', ['members' => $members]);
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

        $member = new FoodCategory();
        $member->title = request('title');
        $member->description = request('description');
        $member->image_url = request('image_url');
        $member->save();

        return redirect('/admin/food-categories');
    }

    public function showEditCategories($id) {
        $member = FoodCategory::find($id);

        return view('admin/food-categories/edit', ['category' => $category]);
    }

    public function update($id) {
        request()->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'image_url' => ['required', 'string']
        ]);

        $member = Member::find($id);
        $member->title = request('title');
        $member->description = request('description');
        $member->image_url = request('image_url');
        $member->save();

        return redirect('/admin/food-categories');
    }

    public function delete($id) {
        $member = Member::find($id);
        $member->delete();
        return redirect('/admin/food-categories');
    }
}
