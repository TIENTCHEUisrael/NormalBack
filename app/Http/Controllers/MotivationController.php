<?php

namespace App\Http\Controllers;
use \App\Models\Motivation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MotivationController extends Controller
{
    public function motivation()
    {
        return view('motivation');
    }
    public function create(Request $request)
    {
        try{
        DB::beginTransaction();
        Motivation::Create(['intitule' => $request->input('intitule')]);
        DB::commit();
        return back();
        }catch(Throwable)
        {return back();}

    }
    public function motivations(){
        $list = Motivation::all();
        return view('list_motivation',compact('list'));

    }

    public function destroy($id){
        try {
            DB::beginTransaction();
            Motivation::find($id)->delete();
            DB::commit();
            return redirect('list_motivation');

        } catch (\Throwable $th) {
            return back();
        }
    }
    public function editpage($id){
        try {

            DB::beginTransaction();
            $motivation = Motivation::findOrFail($id);
            DB::commit();
            return view('update_motivation', compact('motivation'));

        } catch (\Throwable $th) {

            return back();
        }


    }
    public function update($id){
        try {
            DB::beginTransaction();
            Motivation::find($id)->update();
            DB::commit();
            return redirect('list_motivation');
        } catch (\Throwable $th) {
            return back();
            //throw $th;
        }
    }
}
