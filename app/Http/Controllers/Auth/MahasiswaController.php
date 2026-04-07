<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        return "Ini adalah method index di MahasiswaController";
    }

    public function insertSql()
    {
       $query = DB::insert("INSERT INTO students(nim, nama_lengkap, tempat_lahir, tgl_lahir, email, prodi, alamat, created_at, updated_at) VALUES ('2401093008', 'Laras Aprilia', 'Padang', '2006-04-06', 'larasaprilia060406@gmail.com', 'MI', 'Jl. Tanah Sirah no.12 Padang', now(), now())");
    }
}
