<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Carbon\Carbon;

class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = DB::connection("mysql")->table("gajis")->get();
        return response()->json($query);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $timestamp = \Carbon\Carbon::now()->toDateTimeString();
        $this->validate($request,[
            "jumlah_gaji" => "required",
        ]);
        $request["created_at"] = $timestamp;
        $request["updated_at"] = $timestamp;
        $query = DB::connection("mysql")->table("gajis")->insert($request->all());
        return response()->json("create data",200);
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
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $query = DB::connection("mysql")->table("gajis")->find($id);
        if($query==NULL){
            return response()->json("gagal",404);
        }else{
            return response()->json($query,200);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function edit(Gaji $gaji)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $query = DB::connection("mysql")->table("gajis")->find($id);
        if($query==NULL){
            return response()->json("gagal",404);
        }else{
            $timestamp = \Carbon\Carbon::now()->toDateTimeString();
            $query = DB::connection("mysql")->table("gajis")->where("id",$id)->update($request->all());
            $request["updated_at"] = $timestamp;
            return response()->json("berhasil update",200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $query = DB::connection("mysql")->table("gajis")->find($id);
        if($query==NULL){
            return response()->json("gagal",404);
        }else{
            $query = DB::connection("mysql")->table("gajis");
            $query->find($id);
            $query->delete($id);
            return response()->json("berhasil hapus",200);
        }
    }
}
