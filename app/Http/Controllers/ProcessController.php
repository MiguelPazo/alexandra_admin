<?php namespace Ale\Http\Controllers;

use Ale\Election;
use Ale\Http\Requests;
use Ale\Process;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProcessController extends Controller
{

    public function showView()
    {
        return view('process.view');
    }

    public function elections($idProcess)
    {
        $lstElection = Election::process($idProcess)
            ->orderBy('date', 'DESC')
            ->get();

        return $lstElection;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $lstProcess = Process::orderBy('date_begin', 'DESC')->get();

        return $lstProcess;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('process.create');
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

        return redirect()->route('process.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $oProcess = Process::findorFail($id);

        return $oProcess;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function config($id)
    {
//        $oProcess = Process::findorFail($id);
//
//        return view('process.config', compact('oProcess'));

        return view('process.config');
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

        return redirect()->route('process.index');
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