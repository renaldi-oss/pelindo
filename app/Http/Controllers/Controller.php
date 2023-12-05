<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $data = DB::select('SELECT * FROM tanki1 ORDER BY dt DESC');
        $data2 = DB::select('SELECT * FROM tanki2 ORDER BY dt DESC');

        $tank1_max = collect($data)->max('volume');
        $tank2_max = collect($data2)->max('volume');
        
        $labels = collect($data)->pluck('dt')->toArray();
        $labels2 = collect($data2)->pluck('dt')->toArray();

        $tank1_volume = collect($data)->pluck('volume')->toArray();
        $tank2_volume = collect($data2)->pluck('volume')->toArray();

        $tank1_level = collect($data)->pluck('level')->toArray();
        $tank2_level = collect($data2)->pluck('level')->toArray();


        return view('app',['data' => $data, 
        'data2' => $data2,
        'tank1_max' => $tank1_max, 
        'tank2_max' => $tank2_max,
        'labels' => $labels, 'labels2' => $labels2
        , 'tank1_volume' => $tank1_volume, 'tank2_volume' => $tank2_volume
        , 'tank1_level' => $tank1_level, 'tank2_level' => $tank2_level
        ]);
    }
}
