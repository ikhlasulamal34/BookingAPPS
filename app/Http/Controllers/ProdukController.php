<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ProdukController extends Controller
{
    public function index()
    {
        $getProduk = DB::table('barang')->get();
        $return = [
            'getProduk',
        ];
        return view('produk', compact($return));
    }

    public function tambahproduk()
    {
        
        return view ('tbhproduk');
    }
    
    public function editproduk($id)
    {
        $barang = DB::table('barang')->where('id',$id)->get();
        return view('editproduk',['barang'=>$barang]);
    }

}
