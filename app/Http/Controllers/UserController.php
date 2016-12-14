<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SoThich;
use App\Models\DaiHoc;
use App\Models\NgoaiNgu;
use App\Models\ChuyenNganh;
use App\Models\KyNangLamViec;
use App\Models\CacDuAnThamGia;
use DB;
use App\Models\GioiThieuBanThan;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\UserRequest;
use App\Models\KyNangChuyenMon;
use PhpOffice\PhpWord\TemplateProcessor;

class UserController extends Controller
{
    public function recruitment()
    {
        $chuyennganh = KyNangChuyenMon::all();
        $sothich = SoThich::all();
        $viewData = [
            'chuyennganh' => $chuyennganh,
            'sothich' => $sothich
        ];
        return view('recruitment.form_thong_tin', $viewData);
    }

    public function recruitmentPost(UserRequest $request)
    {
        dd(Input::all());
        $user = new User;
        if ($request->hasFile('inputAnh')) {
            $file = $request->file('inputAnh');
            $duoi = $file->getClientOriginalExtension();
            if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
                return redirect('/')->with('loianh', 'ko dung dinh dang jpg, png, jpeg');
            $name = $file->getClientOriginalName();
            $ldate = date('Y_m_d_H_i_s');
            $Hinh = $ldate . "_" . $name;
            $file->move('public/upload/', $Hinh);
            $user->anh = $Hinh;
        } else
            $user->anh = "";
        //echo $request->tinhcach;

        $user->tinhcach = $request->tinhcachbanthan;
        $user->uocmo = $request->uocmo;
        $user->khanangdacbiet = $request->khanang;
        if ($request->lydo == null)
            $user->lydodennhat = '';
        else
            $user->lydodennhat = $request->lydo;
        $user->sothich = $request->sothichbanthan;
        $user->save();
        ///cap nhat xong bang user 

        //cap nhat so thich
        $findUser = User::where('email', $request->inputEmail)->first();
        //cap nhat xong so thich

        //print_r($request->truong_tot_nghiep);
        /* echo "test: <br>";
         print_r($request->truong_tot_nghiep);*/
        if (isset($request->truong_tot_nghiep)) {
            $biendem = count($request->truong_tot_nghiep);
            for ($i = 0; $i < $biendem; $i++) {
                if ($request->truong_tot_nghiep[$i] != null && $request->nam_tot_nghiep[$i] != null) {
                    $daihocdb = new DaiHoc();
                    $daihocdb->idUser = $findUser->id;
                    $daihocdb->truong = $request->truong_tot_nghiep[$i];
                    if (isset($request->nganh_tot_nghiep[$i]))
                        $daihocdb->nganh = $request->nganh_tot_nghiep[$i];
                    else
                        $daihocdb->nganh = '';
                    $daihocdb->namNH = $request->nam_nhap_hoc[$i];
                    $daihocdb->namTN = $request->nam_tot_nghiep[$i];
                    $daihocdb->save();
                }
            }
        }

        ///cap nhat xong bang dai hoc


        //cap nhat bang ngoai ngu
        if (isset($request->ngoaingu)) {
            foreach ($request->ngoaingu as $key) {
                if ($key == "anh" && isset($request->$key)) {
                    foreach ($request->$key as $value) {
                        $ngoaingudb = new ngoaingu;
                        $ngoaingudb->idUser = $findUser->id;
                        $ngoaingudb->ngoaingu = "Tiếng anh";
                        $ngoaingudb->trinhdo = $value;
                        $ngoaingudb->khac = $request->$value;
                        $ngoaingudb->save();
                    }
                } else {
                    if ($key == "nhat") {
                        if ($request->$key != null) {
                            $ngoaingudb = new ngoaingu;
                            $ngoaingudb->idUser = $findUser->id;
                            $ngoaingudb->ngoaingu = "Tiếng nhật";
                            $ngoaingudb->trinhdo = $request->$key;
                            $ngoaingudb->khac = '';
                            $ngoaingudb->save();
                        }
                    } else {
                        if ($request->$key != null) {
                            $ngoaingudb = new ngoaingu;
                            $ngoaingudb->idUser = $findUser->id;
                            $ngoaingudb->ngoaingu = "Tiếng trung quốc";
                            $ngoaingudb->trinhdo = $request->$key;
                            $ngoaingudb->khac = '';
                            $ngoaingudb->save();
                        }
                    }
                }
            }
        }
        //ket thuc luu ngoai ngu

        //cap nhat bang chuyen nganh

        if (isset($request->os)) {
            foreach ($request->os as $key) {
                $f = changeTitle($key);
                $chuyennganhdb = new chuyennganh;
                $chuyennganhdb->idUser = $findUser->id;
                $chuyennganhdb->tenCM = "Kiến thức kinh nghiệm về OS";
                $chuyennganhdb->tenCN = $key;
                $chuyennganhdb->kinhnghiem = $request->$f;
                $chuyennganhdb->ghichu = '';
                $chuyennganhdb->save();
            }
        }

        if (isset($request->db)) {
            foreach ($request->db as $key) {
                $f = changeTitle($key);
                $chuyennganhdb = new chuyennganh;
                $chuyennganhdb->idUser = $findUser->id;
                $chuyennganhdb->tenCM = "Kiến thức kinh nghiệm về Database";
                $chuyennganhdb->tenCN = $key;
                $chuyennganhdb->kinhnghiem = $request->$f;
                $chuyennganhdb->ghichu = '';
                $chuyennganhdb->save();
            }
        }

        if (isset($request->ide)) {
            foreach ($request->ide as $key) {
                $f = changeTitle($key);
                $chuyennganhdb = new chuyennganh;
                $chuyennganhdb->idUser = $findUser->id;
                $chuyennganhdb->tenCM = "Kiến thức kinh nghiệm về Ngôn ngữ lập trình, Framework, IDE";
                $chuyennganhdb->tenCN = $key;
                $chuyennganhdb->kinhnghiem = $request->$f;
                $chuyennganhdb->ghichu = '';
                $chuyennganhdb->save();
            }
        }

        if (isset($request->web)) {
            foreach ($request->web as $key) {
                $f = changeTitle($key);
                $chuyennganhdb = new chuyennganh;
                $chuyennganhdb->idUser = $findUser->id;
                $chuyennganhdb->tenCM = "Kiến thức kinh nghiệm về vận hành máy chủ web";
                $chuyennganhdb->tenCN = $key;
                $chuyennganhdb->kinhnghiem = $request->$f;
                $chuyennganhdb->ghichu = '';
                $chuyennganhdb->save();
            }
        }

        if (isset($request->vphong)) {
            foreach ($request->vphong as $key) {
                $chuyennganhdb = new chuyennganh;
                $chuyennganhdb->idUser = $findUser->id;
                $chuyennganhdb->tenCM = "Kiến thức về tin học văn phòng";
                $chuyennganhdb->tenCN = $key;
                $chuyennganhdb->kinhnghiem = "";
                $chuyennganhdb->ghichu = '';
                $chuyennganhdb->save();
            }
        }


        if (isset($request->kthuckhac)) {
            foreach ($request->kthuckhac as $key) {
                $chuyennganhdb = new chuyennganh;
                $chuyennganhdb->idUser = $findUser->id;
                $chuyennganhdb->tenCM = "Kiến thức khác";
                $chuyennganhdb->tenCN = $key;
                $chuyennganhdb->kinhnghiem = "";
                $chuyennganhdb->ghichu = '';
                $chuyennganhdb->save();
            }
        }

        ///cap nhat xong bang chuyen nganh
        //cap nhat kinh nghiem ban than

        $countkn = count($request->noilamviec);
        for ($i = 0; $i < $countkn; $i++) {
            if ($request->noilamviec[$i] != null && $request->vitrilamviec[$i] != null) {
                $knlv = new kynanglamviec;
                $knlv->idUser = $findUser->id;
                $knlv->noilamviec = $request->noilamviec[$i];
                $knlv->vitri = $request->vitrilamviec[$i];
                $knlv->thoigianbatdau = $request->thoigianbatdau[$i];
                $knlv->thoigianketthuc = $request->thoigianketthuc[$i];
                $knlv->save();
            }
        }

        ///luu xong ky nang lam viec
        //luu du an tham gia
        $countda = count($request->inputTen_du_an);
        for ($i = 0; $i < $countda; $i++) {
            if ($request->inputTen_du_an[$i] != null && $request->inputTom_tat_du_an[$i] != null) {
                $datg = new cacduanthamgia;
                $datg->idUser = $findUser->id;
                $datg->ten = $request->inputTen_du_an[$i];
                $datg->tomtat = $request->inputTom_tat_du_an[$i];
                $datg->ngaybatdau = $request->inputTime_begin_du_an[$i];
                $datg->ngayketthuc = $request->inputTime_end_du_an[$i];
                $datg->songuoi = $request->inputSo_nguoi_du_an[$i];
                $datg->chitiet = $request->inputChi_tiet_du_an[$i];
                $datg->vaitro = $request->inputVai_tro_trong_du_an[$i];
                $datg->congvieccuthe = $request->inputCongviec_cuthe_du_an[$i];
                $datg->moitruongpt = $request->inputEnviroment_du_an[$i];
                $datg->ngonngusd = $request->inputNgonngu_trong_du_an[$i];
                $datg->save();
            }
        }

        return redirect('exp/' . $request->inputEmail);
    }

    public function xuatfile($mail)
    {
        $phpWord = new TemplateProcessor('public/file/cvtmp.docx');
        $findUser = User::where('email', $mail)->first();
        $phpWord->setValue('hoten', $findUser->name);
        $phpWord->setValue('ngaythangnamsinh', $findUser->ngaysinh);
        $phpWord->setValue('dienthoai', $findUser->sdt);
        $phpWord->setValue('gt', ($findUser->gioitinh > 0) ? 'Nam' : 'Nữ');
        $phpWord->setValue('email', $findUser->email);
        $phpWord->setValue('quequan', $findUser->quequan);
        $phpWord->setValue('diachi', $findUser->diachi);

        $ldate = date('Y_m_d_H_i_s');
        $ppto = changeTitle($findUser->name) . '_' . $ldate;


        $daihoc = DaiHoc::where('idUser', $findUser->id)->get();
        $phpWord->cloneRow('namNH', count($daihoc));
        for ($i = 0; $i < count($daihoc); $i++) {
            $phpWord->setValue('namNH#' . ($i + 1), $daihoc[$i]->namNH);
            $phpWord->setValue('namKT#' . ($i + 1), $daihoc[$i]->namTN);
            $phpWord->setValue('nd#' . ($i + 1), ($daihoc[$i]->nganh == null || $daihoc[$i]->nganh == '') ? $daihoc[$i]->truong : ('Học ngành: ' . $daihoc[$i]->nganh . ' tại trường ' . $daihoc[$i]->truong));
        }

        $knlv = KyNangLamViec::where('idUser', $findUser->id)->get();
        $phpWord->cloneRow('namvao', count($knlv));
        for ($i = 0; $i < count($knlv); $i++) {
            $phpWord->setValue('namvao#' . ($i + 1), $knlv[$i]->thoigianbatdau);
            $phpWord->setValue('namra#' . ($i + 1), $knlv[$i]->thoigianketthuc);
            $phpWord->setValue('cty#' . ($i + 1), ($knlv[$i]->vitri == null || $knlv[$i]->vitri == '') ? $knlv[$i]->noilamviec : ('Vị trí: ' . $knlv[$i]->vitri . ' tại ' . $knlv[$i]->noilamviec));
        }

        $nn = NgoaiNgu::where('idUser', $findUser->id)->get();
        $phpWord->cloneRow('tennn', count($nn));
        for ($i = 0; $i < count($nn); $i++) {
            $phpWord->setValue('tennn#' . ($i + 1), $nn[$i]->ngoaingu);
            $phpWord->setValue('trinhdo#' . ($i + 1), ($nn[$i]->ngoaingu == "Tiếng anh") ? ($nn[$i]->trinhdo . ' : ' . $nn[$i]->khac) : ($nn[$i]->trinhdo));
        }


        $chuyenmon = ChuyenNganh::where('idUser', $findUser->id)->get();

        $phpWord->cloneRow('tenchuyenmon', count($chuyenmon));
        for ($ii = 0; $ii < count($chuyenmon); $ii++) {
            $phpWord->setValue('tenchuyenmon#' . ($ii + 1), $chuyenmon[$ii]->tenCN);
            $phpWord->setValue('kinhnghiem#' . ($ii + 1), $chuyenmon[$ii]->kinhnghiem);
        }
        $duanthamgia = CacDuAnThamGia::where('idUser', $findUser->id)->get();
        $phpWord->cloneRow('tenduan', count($duanthamgia));
        for ($i = 0; $i < count($duanthamgia); $i++) {
            $phpWord->setValue('tenduan#' . ($i + 1), $duanthamgia[$i]->ten);
            $phpWord->setValue('ngaybdau#' . ($i + 1), $duanthamgia[$i]->ngaybatdau);
            $phpWord->setValue('ngaykthuc#' . ($i + 1), $duanthamgia[$i]->ngayketthuc);
            $phpWord->setValue('tomtat#' . ($i + 1), $duanthamgia[$i]->tomtat);
            $phpWord->setValue('songuoi#' . ($i + 1), $duanthamgia[$i]->songuoi);
            $phpWord->setValue('chitiet#' . ($i + 1), $duanthamgia[$i]->chitiet);
            $phpWord->setValue('vaitro#' . ($i + 1), $duanthamgia[$i]->vaitro);
            $phpWord->setValue('congvieccuthe#' . ($i + 1), $duanthamgia[$i]->congvieccuthe);
            $phpWord->setValue('mtpt#' . ($i + 1), $duanthamgia[$i]->moitruongpt);
            $phpWord->setValue('ngonngusudung#' . ($i + 1), $duanthamgia[$i]->ngonngusd);
        }

        $phpWord->setValue('sothich', $findUser->sothich);
        $phpWord->setValue('tinhcach', $findUser->tinhcach);
        $phpWord->setValue('lydodennhat', $findUser->lydodennhat);
        $phpWord->setValue('khanang', $findUser->khanangdacbiet);
        $phpWord->setValue('uocmo', $findUser->uocmo);
        $phpWord->setImg('img', array('src' => 'public/upload/' . $findUser->anh, 'swh' => '140'));

        $phpWord->saveAs('public\file\cv_' . $ppto . '.docx');
        return redirect('html_email/' . $ppto);
    }

}
