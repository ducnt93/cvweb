<?php

namespace App\Http\Controllers;

use App\Models\SoThich;
use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    public function search($idTheLoai)
    {
        if ($idTheLoai != 'nothing') {
            $sothich = DB::table('danhsachsothich')->where('tensothich', 'like', '%' . $idTheLoai . '%')
                ->get();
            $arr = $arr1 = array();
            foreach ($sothich as $key => $val) {
                $a = explode(strtolower($idTheLoai), strtolower($sothich[$key]->tensothich));
                // $a = explodemb_strtoupper($str, 'UTF-8')
                $arr[$key] = strlen($a[0]);
                $arr1[$key] = $sothich[$key]->tensothich;
            }
            for ($i = 0; $i < count($arr); $i++) {
                for ($j = $i + 1; $j < count($arr); $j++) {
                    if ($arr[$j] < $arr[$i]) {
                        $tem = $arr[$i];
                        $arr[$i] = $arr[$j];
                        $arr[$j] = $tem;
                        $tem = $arr1[$i];
                        $arr1[$i] = $arr1[$j];
                        $arr1[$j] = $tem;
                    }
                }
            }
            echo '<select id="kqst"   class="form-control" style="width: 104%; margin-left: -17px" multiple >';
            foreach ($arr1 as $st) {
                //echo "<option value='".$st->tensothich."'>".$st->tensothich."</option>";
                echo "<option value='" . $st . "'>" . $st . "</option>";
            }
            echo "</select>";
        }

    }

    public function searchtc($idTheLoai)
    {
        if ($idTheLoai != 'nothing') {
            $sothich = DB::table('tinhcach')->where('tentinhcach', 'like', '%' . $idTheLoai . '%')
                ->get();
            $arr = $arr1 = array();
            foreach ($sothich as $key => $val) {
                $a = explode(strtolower($idTheLoai), strtolower($sothich[$key]->tentinhcach));
                // $a = explodemb_strtoupper($str, 'UTF-8')
                $arr[$key] = strlen($a[0]);
                $arr1[$key] = $sothich[$key]->tentinhcach;
            }
            for ($i = 0; $i < count($arr); $i++) {
                for ($j = $i + 1; $j < count($arr); $j++) {
                    if ($arr[$j] < $arr[$i]) {
                        $tem = $arr[$i];
                        $arr[$i] = $arr[$j];
                        $arr[$j] = $tem;
                        $tem = $arr1[$i];
                        $arr1[$i] = $arr1[$j];
                        $arr1[$j] = $tem;
                    }
                }
            }
            echo '<select id="kqtc"   class="form-control" style="width: 104%; margin-left: -17px" multiple >';

            foreach ($arr1 as $st) {
                echo "<option value='" . $st . "'>" . $st . "</option>";

            }
            echo "</select>";
        }
    }

}
