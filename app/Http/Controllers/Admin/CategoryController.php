<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = Category::with(['parentCategory' => function ($query) {
            return $query->select('id', 'name');
        }])->select('id', 'name', 'parent_id');

        if($request->q){
            $categories = $categories->where('name', 'LIKE', '%' . $request->q . '%');
        }


            $categories = $categories->paginate(2);

        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Todo check authorization
        $categories = Category::select('id', 'name')->get();
        return view('admin.categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate(
            $request,
            [
                'name' => 'required|min:4',
                //'parent_id' => 'integer',
            ],
            [
                'parent_id.integer' => 'Parent category is not valid'
            ]
        );

        //Todo check authorization


        $parentCategory = null;
        if($request->parent_id){
            $parentCategory = Category::findOrFail($request->parent_id);
        }

        Category::createCategory($request->name, $parentCategory);
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);

        // TODO check authorization

        $categories = Category::select('id', 'name')->get();
        return view('admin.categories.edit', compact('category','categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(
            $request,
            [
                'name' => 'required|min:4',
                //'parent_id' => 'integer',
            ],
            [
                'parent_id.integer' => 'Parent category is not valid'
            ]
        );

        $category = Category::findOrFail($id);
        //Todo check authorization

        $category->name = $request->name;
        if(!$request->parent_id) {

            $category->address = null;
            $category->parent_id = null;
        }else{
            $parentCategory = Category::findOrFail($request->parent_id);
            $category->name = $request->name;
            $category->address = ($parentCategory->address ? ($parentCategory->address . '-') : '') . $parentCategory->id;
            $category->parentCategory()->associate($parentCategory);

        }
        $category->save();
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::where('id', $id)->delete();
        flash()->message('Category Removed')->success();
        return back();
    }
}
