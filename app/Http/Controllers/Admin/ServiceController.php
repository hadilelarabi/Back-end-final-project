<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();

        return view('web.admin.service.index',compact('services'));
                
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.admin.service.create');
        
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

        $service = Service::create($request->all());

        if ($request->file('image')) {
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('/images/our-services'), $filename);
            $service->image= $filename;
            $service->save();

        }
        return redirect()->back()->with('success', 'Service Added Successfully!');
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
    public function edit(Service $service)
    {
        return view('web.admin.service.edit',compact('service'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title'       => 'required|string|min:4',
            'description' => 'required|string|max:200',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        if ($request->file('image')) {
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('/images/our-services'), $filename);
            $service['image'] = $filename;


            // File::delete(public_path('/images/about-us' .  $about->image));
            // $about->update($request->all());
            
          }

          $service->title = $request->title;
          $service->description = $request->description;
          $service->update();


        return redirect()->back()->with('success', 'Service Updated Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->back()->with('success', 'Service Deleted Successfully!');
    }
}
