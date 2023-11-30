<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PagesController;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;





class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("Pengaduan.index",[
            "pengaduans" => Pengaduan::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Pengaduan.create",);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomer_tlp' => 'required|max:13'
        ]);

        $validated = $request-> validate( [
            'foto'=> ['image'],
        ]);
        
        $foto = null;

        if ($request->hasFile("foto")) { 
            $foto = $request->file("foto")->store("foto");
        }
    


        
        $user = new Pengaduan;
        $user->jenis_keluhan = $request->jenis_keluhan;
        $user->nomer_tlp = $request->nomer_tlp;
        $user->deskripsi = $request->deskripsi;
        $user->foto = $foto;
        
        $user->save();

        return redirect()->route("Pengaduan.index")->with("success");
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pengaduan = Pengaduan::find($id);
        
        
        return view("Pengaduan.edit",[
            'pengaduan' =>$pengaduan,
            
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {   
        $user = Pengaduan::find($id);
        $validated = $request-> validate( [
            'foto'=> ['image'],
        ]);
        
        $foto = null;

        if ($request->hasFile("foto")) { 
            $foto = $request->file("foto")->store("foto");
        }
        
        $user->jenis_keluhan = $request->jenis_keluhan;
        $user->nomer_tlp = $request->nomer_tlp;
        $user->deskripsi = $request->deskripsi;
        $user->foto = $foto;
        
        $user->save();

        return redirect()->route("Pengaduan.index")->with("success");
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pengaduan = Pengaduan::find($id);
        
        $pengaduan->delete($id);
        return redirect()->route("Pengaduan.index")->with("success");
        
    }
}
