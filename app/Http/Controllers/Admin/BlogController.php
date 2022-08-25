<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();

        return view('web.admin.blog.index',compact('blogs'));
                
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('web.admin.blog.create',compact('categories'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|min:4',
            'title'       => 'required|string|min:4',
            'description' => 'required|string|max:200',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $blogs = Blog::create($request->all());

        if ($request->file('image')) {
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('/images/blogs'), $filename);
            $blogs->image= $filename;
            $blogs->save();

        }

        if ($request->file('img')) {
            $file= $request->file('img');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('/images/blogs'), $filename);
            $blogs->img= $filename;
            $blogs->save();

        }
        return redirect()->back()->with('success', 'Data Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $categories = Category::all();
        return view('web.admin.blog.edit',compact('categories','blog'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'name'        => 'required|string|min:4',
            'title'       => 'required|string|min:4',
            'description' => 'required|string|max:200',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        if ($request->file('image')) {
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('/images/blogs'), $filename);
            $blog['image'] = $filename;

            // File::delete(public_path('/images/blog-us' .  $blog->image));
            // $blog->update($request->all());
          }

          if ($request->file('img')) {
            $file= $request->file('img');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('/images/blogs'), $filename);
            $blog['img'] = $filename;

            // File::delete(public_path('/images/blog-us' .  $blog->image));
            // $blog->update($request->all());
          }
          $blog->name = $request->name;
          $blog->title = $request->title;
          $blog->description = $request->description;
          $blog->update();


        return redirect()->back()->with('success', 'Data Updated Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->back()->with('success', 'Data Deleted Successfully!');
    }
}
