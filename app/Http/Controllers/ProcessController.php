<?php namespace Ale\Http\Controllers;

use Ale\Election;
use Ale\Http\Requests;
use Ale\Process;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $lstProcess = Process::paginate(2);

        return view('admin.process', compact('lstProcess'));
    }

    public function  getElections($idProcess)
    {
        $lstElection = Election::process($idProcess)->get();

        return view('admin.election', compact('lstElection'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.process.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $oProcess = new Process($request->all());
        $oProcess->user_id = Auth::user()->id;
        $oProcess->save();

        return redirect()->route('admin.process.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $oProcess = Process::findorFail($id);

        return view('admin.process.edit', compact('oProcess'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $oProcess = Process::findorFail($id);
        $oProcess->fill($request->all());

        $oProcess->save();

        return redirect()->route('admin.process.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
