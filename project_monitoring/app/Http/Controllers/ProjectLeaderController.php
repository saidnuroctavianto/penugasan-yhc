<?php

namespace App\Http\Controllers;

use App\Models\ProjectLeader;
use Illuminate\Http\Request;

class ProjectLeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project_leaders = ProjectLeader::all();
        return view('project_leader.index', compact('project_leaders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project_leader.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileimage = $request->file('image');
        $nameimage = time() . '.' . $fileimage->getClientOriginalExtension();
        $fileimage->move(public_path('assets/images/'), $nameimage);

        ProjectLeader::create([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $nameimage
        ]);

        return redirect(route('project_leader.index'))->with('success', 'Data berhasil ditambahkan');
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
    public function edit(ProjectLeader $project_leader)
    {
        return view('project_leader.edit', compact('project_leader'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectLeader $project_leader)
    {
        $input = $request->all();
        if ($image = $request->file('image')) {
            $fileimage = $request->file('image');
            $nameimage = time() . '.' . $fileimage->getClientOriginalExtension();
            $fileimage->move(public_path('assets/images/'), $nameimage);
            $input['image'] = $nameimage;
        } else {
            unset($input['image']);
        }

        $project_leader->update($input);

        return redirect()->route('project_leader.index')->with('success', "Data berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectLeader $project_leader)
    {
        $project_leader->delete();
        return redirect()->route('project_leader.index')->with('success', "Data berhasil dihapus");
    }
}
