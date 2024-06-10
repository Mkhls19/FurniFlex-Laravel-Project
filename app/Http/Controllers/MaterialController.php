<?php

namespace App\Http\Controllers;
use App\Models\bahanmaterial;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtMaterial = bahanmaterial::all();
        return view('bahanmaterial.bahanmaterial',compact('dtMaterial'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bahanmaterial.tambahbahanmaterial');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        bahanmaterial::create([
            'Id_Material' =>$request->Id_Material,
            'Kategori' =>$request->Kategori,
            'Jumlah' =>$request->Jumlah,
            'Harga' =>$request->Harga,
        ]);
        return redirect ('Material')->with('success', 'Data  Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mat = bahanmaterial::findorfail($id);
        return view('bahanmaterial.updatebahanmaterial',compact('mat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $mat = bahanmaterial::findorfail($id);
        $mat ->update($request->all());
        return redirect ('Material');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mat = bahanmaterial::findorfail($id);
        $mat->delete();
        return back();
    }

    public function downloadpdf()
    {
    $dtCetakMaterial = bahanmaterial::all();
        $pdf = 'PDF'::loadview('bahanmaterial.cetakbahanmaterial',compact('dtCetakMaterial'));
        $pdf->setPaper('A4','portrait');
        return $pdf->stream('Data-Material.pdf');
    }
}
