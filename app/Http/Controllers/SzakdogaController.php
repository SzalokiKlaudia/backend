<?php

namespace App\Http\Controllers;

use App\Models\Szakdoga;
use App\Http\Requests\StoreSzakdogaRequest;
use App\Http\Requests\UpdateSzakdogaRequest;

class SzakdogaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Szakdoga::all();//get kérés midnent visszaad
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSzakdogaRequest $request)//postolás
    {
        $record = new Szakdoga();
        $record->fill($request->all());
        $record->save();

        return response()->json([

            'message'=>'Post created !',
            'data'=>$record
        ],201);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSzakdogaRequest $request, $id)//id alapján updatelsz
    {
        $record = Szakdoga::find($id);
        if(!$record){
            return response()->json([
                'message'=>'Post not found'
            ],404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)//id alapján törölsz
    {
        $record = Szakdoga::find($id);
        if(!$record){
            return response()->json([
                'message'=>'Post not found'
            ],404);
        }

        $record->delete();
        return response()->json([
            'message'=>'Post deleted'
        ]);
    }
}
