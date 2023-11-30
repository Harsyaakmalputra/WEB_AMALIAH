<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PagesController;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;





class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("Jurusan.index",[
            "jurusans" => Jurusan::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Jurusan.create",);
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
    


        
        $user = new Jurusan;
        $user->nama_jurusan = $request->nama_jurusan;
        $user->deskripsi = $request->deskripsi;
        $user->foto = $foto;
        
        $user->save();

        return redirect()->route("Jurusan.index")->with("success");
    }

    /**
     * Display the specified resource.
     */
    public function show(Jurusan $jurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jurusan = Jurusan::find($id);
        
        
        return view("Jurusan.edit",[
            'jurusan' =>$jurusan,
            
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {   
        $user = Jurusan::find($id);
        $validated = $request-> validate( [
            'foto'=> ['image'],
        ]);
        
        $foto = null;

        if ($request->hasFile("foto")) { 
            $foto = $request->file("foto")->store("foto");
        }
        
        $user->nama_jurusan = $request->nama_jurusan;
        $user->deskripsi = $request->deskripsi;
        $user->foto = $foto;
        
        $user->save();

        return redirect()->route("Jurusan.index")->with("success");
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jurusan = Jurusan::find($id);
        
        $jurusan->delete($id);
        return redirect()->route("Jurusan.index")->with("success");
        
    }
}
