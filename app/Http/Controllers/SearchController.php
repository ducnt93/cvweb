<?php

namespace App\Http\Controllers;
use App\Models\SoThich;
use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    public function search($idTheLoai)
    {
        if($idTheLoai=='haubasdasjdnasdnsakjdnasndjaks'){
            echo "";
        }else{
            $sothich = DB::table('danhsachsothich')->where('tensothich', 'like', '%'.$idTheLoai.'%')
                ->get();
            echo '<select id="kqst"   class="form-control" style="width: 104%; margin-left: -17px" multiple >';
            foreach ($sothich as $st) {
                echo "<option value='".$st->tensothich."'>".$st->tensothich."</option>";
            }
            echo "</select>";
        }

    }
}
