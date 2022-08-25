<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();

        return view('web.admin.testimonial.index',compact('testimonials'));
                
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.admin.testimonial.create');
        
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
            'name'       => 'required|string|min:4',
            'title'       => 'required|string|min:4',
            'description' => 'required|string|max:200',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $testimonials = Testimonial::create($request->all());

        if ($request->file('image')) {
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('/images/testimonials'), $filename);
            $testimonials->image= $filename;
            $testimonials->save();

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
    public function edit(Testimonial $testimonial)
    {
        return view('web.admin.testimonial.edit',compact('testimonial'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'name'       => 'required|string|min:4',
            'title'       => 'required|string|min:4',
            'description' => 'required|string|max:200',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        if ($request->file('image')) {
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('/images/testimonials'), $filename);
            $testimonial['image'] = $filename;

            // File::delete(public_path('/images/testimonial-us' .  $testimonial->image));
            // $testimonial->update($request->all());
          }

          $testimonial->title = $request->title;
          $testimonial->description = $request->description;
          $testimonial->update();


        return redirect()->back()->with('success', 'Data Updated Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->back()->with('success', 'Data Deleted Successfully!');
    }
}
