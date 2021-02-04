<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Rw;
use App\Models\Tracking;
use DB;

class ProvinsiController extends Controller
{
    public function provinsi($id)
    {
        $provinsi = DB::table('provinsis')
    ->select('provinsis.kode_provinsi','provinsis.nama_provinsi',
    DB::raw('SUM(trackings.positif) as Positif'),
    DB::raw('SUM(trackings.sembuh) as Sembuh'),
    DB::raw('SUM(trackings.meninggal) as Meninggal'))
    ->join('kotas','provinsis_id','=','kotas.id_provinsi')
    ->join('kecamatans','kotas_id','=','kecamatans.id_kota')
    ->join('kelurahans','kecamatans_id','=','kelurahanas.id_kecamatan')
    ->join('rws','kelurahans_id','=','rws.id_kelurahan')
    ->join('trackings','rws_id','=','trackings.id_rw')
    ->groupBy('id_provinsi')->get();
    

    $positif = DB::table('provinsis')
    ->join('kotas','provinsis_id','=','kotas.id_provinsi')
    ->join('kecamatans','kotas_id','=','kecamatans.id_kota')
    ->join('kelurahans','kecamatans_id','=','kelurahanas.id_kecamatan')
    ->join('rws','kelurahans_id','=','rws.id_kelurahan')
    ->join('trackings','rws_id','=','trackings.id_rw')
        ->select('trackings.positif')
        ->where('provinsis.id',$id)
        ->sum('trackings.positif');
        
    $sembuh = DB::table('provinsis')
    ->join('kotas','provinsis_id','=','kotas.id_provinsi')
    ->join('kecamatans','kotas_id','=','kecamatans.id_kota')
    ->join('kelurahans','kecamatans_id','=','kelurahanas.id_kecamatan')
    ->join('rws','kelurahans_id','=','rws.id_kelurahan')
    ->join('trackings','rws_id','=','trackings.id_rw')
        ->select('trackings.sembuh')
        ->where('provinsis.id',$id)
        ->sum('trackings.sembuh');
    $meninggal = DB::table('provinsis')
    ->join('kotas','provinsis_id','=','kotas.id_provinsi')
    ->join('kecamatans','kotas_id','=','kecamatans.id_kota')
    ->join('kelurahans','kecamatans_id','=','kelurahanas.id_kecamatan')
    ->join('rws','kelurahans_id','=','rws.id_kelurahan')
    ->join('trackings','rws_id','=','trackings.id_rw')
        ->select('trackings.meninggal')
        ->where('provinsis.id',$id)
        ->sum('trackings.meninggal');

        return response([
            'success' => true,
            'data' => ['Hari Ini' => $provinsi,
                      ],
            'Total' => ['Jumlah Positif'   => $positif,
                        'Jumlah Sembuh'    => $sembuh,
                        'Jumlah Meninggal' => $meninggal,
                      ],
            'message' => 'Berhasil'
        ], 200);
    }
}