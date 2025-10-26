<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        date_default_timezone_set('Asia/Jakarta');

        $jamSekarang = date('H');
        $waktuAkses = date('H:i:s') . ' WIB';

        if ($jamSekarang >= 5 && $jamSekarang < 12) {
            $salam = 'Pagi';
        } elseif ($jamSekarang >= 12 && $jamSekarang < 15) {
            $salam = 'Siang';
        } elseif ($jamSekarang >= 15 && $jamSekarang < 18) {
            $salam = 'Sore';
        } else {
            $salam = 'Malam';
        }

        $nama = 'Praktikan EAD';

        $tanggalAkses = $this->getTanggal();

        return view('dashboard', compact('salam', 'nama', 'waktuAkses', 'tanggalAkses'));
    }

    private function getTanggal()
    {

        return date('d-m-Y');
    }
}
