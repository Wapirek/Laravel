<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Console\DbCommand;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view("categories.index",[
            'categories' => Category::orderBy('name','ASC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view("categories.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */

    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  Category  $category
     * @return View
     */

    
    public function show(Category $category)
    {
        $posts = DB::select("SELECT * FROM `posts` where categoryID={$category->id}");
        return view("categories.show",[
            'category' => $category,
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
