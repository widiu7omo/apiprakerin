<?php

namespace App\Http\Controllers;

use App\Pivotlevel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PivotlevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pivotlevel  $pivotlevel
     * @return \Illuminate\Http\Response
     */
    public function show(Pivotlevel $pivotlevel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pivotlevel  $pivotlevel
     * @return \Illuminate\Http\Response
     */
    public function edit(Pivotlevel $pivotlevel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pivotlevel  $pivotlevel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pivotlevel $pivotlevel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pivotlevel  $pivotlevel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pivotlevel $pivotlevel)
    {
        //
    }

    public function getLevelUser($username){
        return DB::table('tb_akun')->leftJoin('tb_level','tb_akun.id', '=' ,'tb_level.akun_id')->leftJoin('tb_master_level','tb_level.id_master_level','=','tb_master_level.id_master_level')->select('nama_master_level as name')->where('tb_akun.username','=',$username)->get();
    }
}
