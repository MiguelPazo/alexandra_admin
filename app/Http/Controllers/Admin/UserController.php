<?php namespace Ale\Http\Controllers\Admin;

use Ale\Http\Requests;
use Ale\Http\Controllers\Controller;

use Ale\Process;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Faker\Factory as Faker;

use Ale\Constants\ConstDb;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $arr = ['male', 'female'];
        shuffle($arr);
        echo $arr[array_rand($arr, 1)];
//        $process = Process::status()->first();
//        dd($process->id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
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
