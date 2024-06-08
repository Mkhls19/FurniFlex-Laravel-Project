<?php

namespace App\Http\Controllers;

use App\Models\bahanmaterial;
use Illuminate\Http\Request;

class bahanmaterialController extends Controller
{
    public function index(){
        $data = bahanmaterial::get(); 
        return view('bahanmaterial/bahanmaterial', compact('data'));
    }

    public function add(){
        return view('bahanmaterial/addbahanmaterial');
    }

    public function insertdata(Request $request){
        
        $request->validate([
            'kategori' => 'required',
            'jumlah' => 'required',
            'harga' => 'required', 
        ]);

        $data = bahanmaterial::create([
            'kategori' => $request->kategori,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
        ]);
        return redirect()->route('bahanmaterial')->with('primary', 'Data Berhasil Ditambahkan!');
    }

    public function readdata($id){
        $data = BahanBaku::find($id);
        return view('bahanmaterial/updatebahanmaterial' , compact('data'));
    }

    public function viewdata($id){
        $data = BahanBaku::find($id);
        return view('bahanmaterial/viewbahanmaterial' , compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Bbahanmaterial::find($id);
        $request->validate([
            'kategori' => 'required',
            'jumlah' => 'required',
            'harga' => 'required', 
        ]);

        $data -> update([
            'kategori' => $request->kategori,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga,
        ]);
        return redirect()->route('bahanmaterial')->with('success', 'Data Berhasil Diubah!');
    }

    public function deletedata($id){
        $data = bahanmaterial::find($id);
        $data->delete();
        return redirect()->route('bahanmaterial')->with('danger', 'Data Berhasil Dihapus!');
    }
}
