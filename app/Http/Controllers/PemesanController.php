<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class PemesanController extends Controller
{
    public function index()
    {
        $getBarang = DB::table('barang')->get();
        $getClient = DB::table('client')->get();
        $getBarangClient = DB::table('barang_client')->get();
        $return = [
            'getBarang',
            'getClient',
            'getBarangClient',
        ];
        return view('pemesan', compact($return));
    }
}
