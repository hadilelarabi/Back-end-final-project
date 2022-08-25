<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();

        return view('web.admin.portfolio.index',compact('portfolios'));
                
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('web.admin.portfolio.create',compact('categories'));
        
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
            'title'       => 'required|string|min:4',
            'description' => 'required|string|max:200',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $portfolios = Portfolio::create($request->all());

        if ($request->file('image')) {
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('/images/portfolios'), $filename);
            $portfolios->image= $filename;
            $portfolios->save();

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
    public function edit(Portfolio $portfolio)
    {
        $categories = Category::all();
        return view('web.admin.portfolio.edit',compact('categories','portfolio'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'title'       => 'required|string|min:4',
            'description' => 'required|string|max:200',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        if ($request->file('image')) {
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('/images/portfolios'), $filename);
            $portfolio['image'] = $filename;

            // File::delete(public_path('/images/portfolio-us' .  $portfolio->image));
            // $portfolio->update($request->all());
          }
          $portfolio->name = $request->name;
          $portfolio->title = $request->title;
          $portfolio->description = $request->description;
          $portfolio->update();


        return redirect()->back()->with('success', 'Data Updated Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect()->back()->with('success', 'Data Deleted Successfully!');
    }
}
