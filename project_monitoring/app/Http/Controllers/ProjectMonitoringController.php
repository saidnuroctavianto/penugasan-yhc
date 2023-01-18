<?php

namespace App\Http\Controllers;

use App\Models\ProjectLeader;
use App\Models\ProjectMonitoring;
use Illuminate\Http\Request;

class ProjectMonitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project_monitorings = ProjectMonitoring::with('projectLeader')->get();
        return view('project_monitoring.index', compact('project_monitorings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project_leaders = ProjectLeader::all();
        return view('project_monitoring.add', compact('project_leaders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ProjectMonitoring::create([
            'name' => $request->name,
            'client' => $request->client,
            'id_leader' => $request->id_leader,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'progress' => $request->progress
        ]);

        return redirect(route('project_monitoring.index'))->with('success', 'Data berhasil ditambahkan');
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
    public function edit(ProjectMonitoring $project_monitoring)
    {
        $project_leaders = ProjectLeader::all();
        return view('project_monitoring.edit', compact('project_monitoring', 'project_leaders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectMonitoring $project_monitoring)
    {
        $input = $request->all();
        $project_monitoring->update($input);

        return redirect()->route('project_monitoring.index')->with('success', "Data berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectMonitoring $project_monitoring)
    {
        $project_monitoring->delete();
        return redirect()->route('project_monitoring.index')->with('success', "Data berhasil dihapus");
    }
}
