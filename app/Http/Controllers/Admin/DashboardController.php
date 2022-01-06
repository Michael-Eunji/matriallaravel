<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Data_biaya_kirim;
use App\Models\Data_harga;
use App\Models\Data_komisi;
use App\Models\Data_toko;
use App\Models\Transaksi;
use App\Models\Users;
use App\Models\User_menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['user'] = AUTH::user();
        $data['title'] = 'Dashboard';
        $data['menu'] = User_menu::all();
        $data['hargas'] = Data_harga::orderBy('id', 'desc')->get();
        $data['harga'] = Data_harga::orderBy('id', 'desc')->first();
        $data['biayakirim'] = Data_biaya_kirim::orderBy('id', 'desc')->get();
        $data['komisis'] = Data_komisi::orderBy('id', 'desc')->get();
        $data['sales'] = Users::whereIn('user_role_id', [1, 2])->count();
        $data['saless'] = Users::whereIn('user_role_id', [1, 2])->get();
        $data['tokos'] = Data_toko::all();
        $data['transaksi'] = Transaksi::orderBy('id', 'desc')->count();
        $data['trk'] = Transaksi::orderBy('id', 'desc')->limit(3)->get();
        $data['users'] = Transaksi::select(\DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(\DB::raw("Month(created_at)"))
            ->pluck('count');

        return view('admin.dashboard.dashboard', $data);
    }

   
    
}
