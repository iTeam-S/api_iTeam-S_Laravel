<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membres = DB::table('membre')->select('id' ,'prenom_usuel', 'user_github', 'mail', 'niveau')->get();
        //echo  $membres;
        return view('membre.membre', ['liste_membres' => $membres]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "Create ela";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('membre')->insert(
            [
                'nom' => $request->input("nom"), 
                'prenom' => $request->input("prenom"),
                'prenom_usuel' => $request->input("prenom_usuel"),
                'user_github' => $request->input("github"),
                'tel1' => $request->input("tel1"),
                'tel2' => $request->input("tel2"),
                'mail' => $request->input("mail"),
                'date_d_adhesion' =>now(),
                'niveau'=> $request->input("niveau"),
            ]
        );
        echo "Succée";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $membre = DB::table('membre')->find($id);
        return view('membre.show', ['un_membre' => $membre]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = DB::table('membre')
        ->where('id', $id)
        ->update(
                [
                    'nom' => $request->input("nom"), 
                    'prenom' => $request->input("prenom"),
                    'prenom_usuel' => $request->input("prenom_usuel"),
                    'user_github' => $request->input("github"),
                    'tel1' => $request->input("tel1"),
                    'tel2' => $request->input("tel2"),
                    'mail' => $request->input("mail"),
                    'date_d_adhesion' =>now(),
                    'niveau'=> $request->input("niveau"),
                ]
            );
        echo $update;
        if($update == 1){
            echo "<p>Succée update</p>";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suppr = DB::table('membre')->where('id', $id)->delete();
        echo $suppr;
        if($suppr == 1){
            echo "<p>Succée suppr</p>";
        }
    }
}
