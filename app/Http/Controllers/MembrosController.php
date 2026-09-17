<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\Membros;

class MembrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Membros::all();
    }

    public function store(Request $request)
    {
        try{
            $membro = Membros::create($request->all());
            return response()->json($membro, 201);
        }catch(\Exception $e){
            return response()->json([
                'success' => false,
                'erro' =>$e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    return Membros::FindOrFail($id); //pesquisar por id
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $membro = Membros::FindOrFail($id);
        return $membro->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Membros::destroy($id);
    }
}
