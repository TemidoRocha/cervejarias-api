<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cervejarias;

class CervejariasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Cervejarias::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validated = $request->validate([
          'name' => 'required|unique:cervejarias,name|max:255',
          'email' => 'email:rfc,dns',
          'website' => 'required|url',
      ]);

      return Cervejarias::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Cervejarias::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $cervejarias = Cervejarias::find($request['id']);
        $cervejarias->update($request->all());
        return $cervejarias;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $cervejarias = Cervejarias::find($request['id']);
      Cervejarias::destroy($request['id']);
      return $cervejarias;
    }
}
