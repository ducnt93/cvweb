<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\KyNangChuyenMon;
use App\Models\SoThich;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function welcome()
    {
        $chuyennganh = KyNangChuyenMon::all();
        $sothich = SoThich::all();
        $viewData = [
            'chuyennganh' => $chuyennganh,
            'sothich' => $sothich
        ];
        return view('welcome', $viewData);
    }

    public function themkn()
    {

    }

    public function themda()
    {

    }
}
