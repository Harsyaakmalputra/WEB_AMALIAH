<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PagesController;

use App\Models\Struktur;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;





class StrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("Struktur.index",[
            "strukturs" => Struktur::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Struktur.create",);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request-> validate( [
            'foto'=> ['image'],
        ]);
        
        $foto = null;

        if ($request->hasFile("foto")) { 
            $foto = $request->file("foto")->store("foto");
        }
    


        
        $user = new Struktur;
        $user->nama = $request->nama;
        $user->jabatan = $request->jabatan;
        $user->foto = $foto;
        
        $user->save();

        return redirect()->route("Struktur.index")->with("success");
    }

    /**
     * Display the specified resource.
     */
    public function show(Struktur $struktur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $struktur = Struktur::find($id);
        
        
        return view("Struktur.edit",[
            'struktur' =>$struktur,
            
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {   
        $user = Struktur::find($id);
        $validated = $request-> validate( [
            'foto'=> ['image'],
        ]);
        
        $foto = null;

        if ($request->hasFile("foto")) { 
            $foto = $request->file("foto")->store("foto");
        }
        
        $user->nama = $request->nama;
        $user->jabatan = $request->jabatan;
        $user->foto = $foto;
        
        $user->save();

        return redirect()->route("Struktur.index")->with("success");
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $struktur = Struktur::find($id);
        
        $struktur->delete($id);
        return redirect()->route("Struktur.index")->with("success");
        
    }
}
