<?php

namespace App\Http\Controllers\REST;

use App\Http\Controllers\Controller;
use App\Models\Abonne;
use Illuminate\Http\Request;
use App\Models\Motivation;
use Illuminate\Support\Facades\DB;
use Throwable;

class AbonneController extends Controller
{
    public function index()
    {
        //
        $abonne = Abonne::all();
        return response()->json($abonne, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
            //code...
            DB::beginTransaction();
            $abonne = Abonne::create([
                "prenom"=>$request->prenom,
                "nom"=> $request->nom,
                "telephone"=>$request->telephone,
                "age"=> $request->age,
                "sexe"=>$request->sexe,
                "pays"=> $request->pays,
                "profession"=> $request->profession,
                "ville"=> $request->ville,
                "codePostal"=> $request->codePostal,
                "rue"=> $request->rue,
                'email' => $request->email,
                "idmotivation"=>$request->idmotivation
            ]);
            DB::commit();
            return response()->json($abonne,200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json("erreur d'insertion",500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Abonne $Abonne)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
      try {
        DB::beginTransaction();
        $abonne = Abonne::find($id);
        $abonne->update($request->all());
        DB::commit();
        return response()->json($abonne,200);
      } catch (\Throwable $th) {
        //throw $th;
        return response()->json('erreur au niveau de la modification',500);
      }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        try {
            //code...
            DB::beginTransaction();
            $abonne=Abonne::find($id);
            $abonne->delete();
            DB::commit();
          return response()->json('Abonne a ete suprimer avec succes',200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json('erreur au niveau de la supression',500);
        }
    }
}
