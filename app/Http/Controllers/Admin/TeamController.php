<?php

namespace App\Http\Controllers\Admin;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();

        return view('web.admin.team.index',compact('teams'));
                
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.admin.team.create');
        
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
            'position'   => 'required|string|min:4',
            'image'      => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'twitter'    => 'required|string',
            'facebook'   => 'required|string',
            'instagram'  => 'required|string',
            'linkedin'   => 'required|string',
        ]);

        $teams = Team::create($request->all());

        if ($request->file('image')) {
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('/images/teams'), $filename);
            $teams->image= $filename;
            $teams->save();

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
    public function edit(Team $team)
    {
        return view('web.admin.team.edit',compact('team'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name'       => 'required|string|min:4',
            'position'       => 'required|string|min:4',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'twitter'    => 'required|string',
            'facebook'   => 'required|string',
            'instagram'  => 'required|string',
            'linkedin'   => 'required|string',
        ]);


        if ($request->file('image')) {
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('/images/teams'), $filename);
            $team['image'] = $filename;

            // File::delete(public_path('/images/team-us' .  $team->image));
            // $team->update($request->all());
          }

          $team->name = $request->name;
          $team->position  = $request->position;
          $team->twitter   = $request->twitter;
          $team->facebook  = $request->facebook;
          $team->instagram = $request->instagram;
          $team->linkedin  = $request->linkedin;

          $team->update();


        return redirect()->back()->with('success', 'Data Updated Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->back()->with('success', 'Data Deleted Successfully!');
    }
}
