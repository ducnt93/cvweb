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
 
class UserController extends Controller
{
		public function postLuu(Request $request){

        $this->validate($request,[
            'inputHo'       =>  'min:3|max:50',
            'inputDiachi'   =>  'min:3|max:50',
            'inputSdt'      =>  'regex:/(0)[0-9]{9}/|min:10|max:11',
            'inputEmail'    =>  'unique:users,email',
            'inputQuequan'  =>  'min:3|max:50',
            /*'inputNgaysinh'=>'required',
            'inputNgaysinh'=>'required',
            'inputNgaysinh'=>'required',
            'inputNgaysinh'=>'required',
            'inputNgaysinh'=>'required',
            'inputNgaysinh'=>'required',
            'inputNgaysinh'=>'required',
            'inputNgaysinh'=>'required',
            'inputNgaysinh'=>'required',
            'inputNgaysinh'=>'required',
            'inputNgaysinh'=>'required',
            'inputNgaysinh'=>'required',
            'inputNgaysinh'=>'required',
            'inputNgaysinh'=>'required',*/
            ],[
            "inputHo.min"       =>  'Yêu cầu nhập đúng họ tên mình.',
            "inputHo.max"       =>  "Yêu cầu nhập đúng họ tên mình.",
            "inputDiachi.min"   =>  'Yêu cầu nhập đúng địa chỉ.',
            "inputDiachi.max"   =>  'Yêu cầu nhập đúng địa chỉ.',
            "inputSdt.regex"    =>  'Yêu cầu nhập đúng số điện thoại.',
            "inputSdt.min"      =>  'Yêu cầu nhập đúng số điện thoại.',
            'inputSdt.max'      =>  'Yêu cầu nhập đúng số điện thoại.',
            'inputEmail.unique' =>  'Email vừa nhập đã được sử dụng.',
            'inputQuequan.min'  =>  'Yêu cầu nhập đúng quê quán.',
            'inputQuequan.max'  =>  'Yêu cầu nhập đúng quê quán.'
            ]);

        $user = new User;

        echo "thong tin ca nhan:<br>";
    	echo $request->inputHo;
        $user->name = $request->inputHo;
    	echo "<br>ngay sinh: ";
    	echo $request->inputNgaysinh;
        $user->ngaysinh = $request->inputNgaysinh;
		echo "<br>gioi tinh: ";
    	echo $request->inputGioitinh;
        $user->gioitinh = $request->inputGioitinh;
    	echo "<br>dia chi: ";
    	echo $request->inputDiachi;
        $user->diachi = $request->inputDiachi;
    	echo "<br>sdt: ";
    	echo $request->inputSdt;
        $user->sdt = $request->inputSdt;
    	echo "<br>email: ";
    	echo $request->inputEmail;
        $user->email = $request->inputEmail;
    	echo "<br>Que quan: ";
    	echo $request->inputQuequan;
        $user->quequan = $request->inputQuequan;
    	echo "<br>anh: <pre>";
    	print_r($request->inputAnh);

        if($request->hasFile('inputAnh')){
            $file=$request->file('inputAnh');
            $duoi=$file->getClientOriginalExtension();
            if($duoi!='jpg' && $duoi!='png' && $duoi!='jpeg')
                return redirect('/')->with('loianh','ko dung dinh dang jpg, png, jpeg'); 
            $name=$file->getClientOriginalName();
            $ldate = date('Y_m_d_H_i_s');
            $Hinh=$ldate."_".$name;
            $file->move('public/upload/',$Hinh);
            $user->anh=$Hinh;
        }else
            $user->anh="";
        //echo "hinh anh: ".$Hinh;
        echo "</pre>gioi thieu ban than:<br>";
    	echo "<br> tinh cach: ";
    	echo $request->tinhcach;
    	
        $user->tinhcach = $request->tinhcach;
        echo "<br>uoc mo: ";
        echo $request->uocmo;
        $user->uocmo = $request->uocmo;
        echo "<br>kha nang: ";
        echo $request->khanang;
        $user->khanangdacbiet = $request->khanang;
        echo "<br>ly do den nhat: ";
        echo $request->lydo;
        if($request->lydo == null)
            $user->lydodennhat = '';
        else
            $user->lydodennhat = $request->lydo;
        $user->password = "123456";
        $user->save();
        ///cap nhat xong bang user 

        //cap nhat so thich
        //$findUser=User::find($request->inputEmail);
        $findUser = DB::table('users')->where('email', $request->inputEmail)->first();
        echo("<br>test tim kiem<pre>".$request->inputEmail);

        print_r($findUser);
        echo "</pre> ket thuc";
        echo "<br>so thich: <pre>";
    	print_r( $request->sothich);
    	echo "</pre><br>danh muc so thich:<br>";
    	if(isset($request->sothich)){
            foreach ($request->sothich as $key) {
                echo $key."<pre>";
                print_r($request->$key);
                echo "</pre>";
                echo "<br>";
                if(isset($request->$key)){
                    foreach ($request->$key as $value) {
                        $sothichdb = new gioithieubanthan;
                        $sothichdb->idUser = $findUser->id;
                        $sothichdb->danhmucST = $key;
                        $sothichdb->tenSoThich = $value;
                        $sothichdb->save();
                    }
                }
            }
        }
        //cap nhat xong so thich



        if(isset($request->truong_tot_nghiep)){
            $biendem = count($request->truong_tot_nghiep);
            for($i = 0; $i < $biendem; $i++){
                if($request->truong_tot_nghiep[$i]!=null && $request->nam_tot_nghiep[$i]!=null){
                    $daihocdb = new daihoc;
                    $daihocdb->idUser = $findUser->id;
                    $daihocdb->truong = $request->truong_tot_nghiep[$i];
                    if(isset($request->nganh_tot_nghiep[$i]))
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
       
        echo "<br> ngoai ngu: ";
        echo "<pre>";
        print_r($request->ngoaingu) ;
        echo "</pre>";
        echo "<br> danh muc ngoai ngu<br>";
        if (isset($request->ngoaingu)) {
            foreach ($request->ngoaingu as $key) {
                echo "test1 ".$key."dvh<br>";
                print_r($key);
                if($key =="anh" && isset($request->$key)){
                    print_r( $request->$key);
                    foreach ($request->$key as $value) {
                        $ngoaingudb = new ngoaingu;
                        $ngoaingudb->idUser = $findUser->id;
                        $ngoaingudb->ngoaingu = "Tiếng anh";
                        $ngoaingudb->trinhdo = $value;
                        $ngoaingudb->khac = $request->$value;
                        $ngoaingudb->save();
                    }
                }else{
                    echo $request->$key."<br>";
                    if($key == "nhat"){
                        if($request->$key!=null){
                            $ngoaingudb = new ngoaingu;
                            $ngoaingudb->idUser = $findUser->id;
                            $ngoaingudb->ngoaingu = "Tiếng nhật";
                            $ngoaingudb->trinhdo = $request->$key;
                            $ngoaingudb->khac = '';
                            $ngoaingudb->save();
                        }
                    }else{
                        if($request->$key!=null){
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
 
        if(isset($request->os)){
            foreach ($request->os as $key) {
                $f= changeTitle($key);
                echo ($key .'-'.$request->$f).' | ';
                $chuyennganhdb = new chuyennganh;
                $chuyennganhdb->idUser = $findUser->id;
                $chuyennganhdb->tenCM = "Kiến thức kinh nghiệm về OS";
                $chuyennganhdb->tenCN = $key;
                $chuyennganhdb->kinhnghiem = $request->$f;
                $chuyennganhdb->ghichu = '';
                $chuyennganhdb->save();
            }
        }
       
        if(isset($request->db)){
            foreach ($request->db as $key) {
                $f= changeTitle($key);
                echo ($request->$f).' | ';
                $chuyennganhdb = new chuyennganh;
                $chuyennganhdb->idUser = $findUser->id;
                $chuyennganhdb->tenCM = "Kiến thức kinh nghiệm về Database";
                $chuyennganhdb->tenCN = $key;
                $chuyennganhdb->kinhnghiem = $request->$f;
                $chuyennganhdb->ghichu = '';
                $chuyennganhdb->save();
            }
        }
        
        if(isset($request->ide)){
            foreach ($request->ide as $key) {
                $f= changeTitle($key);
                echo ($request->$f).' | ';
                $chuyennganhdb = new chuyennganh;
                $chuyennganhdb->idUser = $findUser->id;
                $chuyennganhdb->tenCM = "Kiến thức kinh nghiệm về Ngôn ngữ lập trình, Framework, IDE";
                $chuyennganhdb->tenCN = $key;
                $chuyennganhdb->kinhnghiem = $request->$f;
                $chuyennganhdb->ghichu = '';
                $chuyennganhdb->save();
            }
        }
       
        if(isset($request->web)){
            foreach ($request->web as $key) {
                $f= changeTitle($key);
                echo ($request->$f).' | ';
                $chuyennganhdb = new chuyennganh;
                $chuyennganhdb->idUser = $findUser->id;
                $chuyennganhdb->tenCM = "Kiến thức kinh nghiệm về vận hành máy chủ web";
                $chuyennganhdb->tenCN = $key;
                $chuyennganhdb->kinhnghiem = $request->$f;
                $chuyennganhdb->ghichu = '';
                $chuyennganhdb->save();
            }
        }
        
        if(isset($request->vphong)){
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
        
       
        if(isset($request->kthuckhac)){
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
        for ($i=0; $i < $countkn; $i++) { 
            if($request->noilamviec[$i]!=null && $request->vitrilamviec[$i]!=null){
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
        for ($i=0; $i < $countda; $i++) { 
            if($request->inputTen_du_an[$i]!=null && $request->inputTom_tat_du_an[$i]!=null){
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
       


///////////////////////////////////////////////////////////////////////////////////////////////////////////
                                //luu ra file word
///////////////////////////////////////////////////////////////////////////////////////////////////////////       
        $phpWord = new \PhpOffice\PhpWord\PhpWord();

        $section = $phpWord->addSection();

        $fontStyleName = 'rStyle';
        $phpWord->addFontStyle($fontStyleName, array('bold' => true, 'italic' => true, 'size' => 16, 'allCaps' => true, 'color' => '0E628B','background'=>'green'));
        $title = 'rStyle';
        $phpWord->addFontStyle($title, array('bold' => true, 'italic' => true, 'size' => 16, 'allCaps' => true, 'color' => '0E628B','background'=>'green','alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER, 'spaceAfter' => 100));
        
        $fancyTableStyle = array('borderSize' => 6, 'borderColor' => 'black','color'=>'white','valign'=>'center', 'cellMargin' => 80, 'alignment' => \PhpOffice\PhpWord\SimpleType\JcTable::CENTER);
        $fancyTableStyle1 = array('borderSize' => 6, 'borderColor' => 'red','color'=>'red','valign'=>'center', 'cellMargin' => 80, 'alignment' => \PhpOffice\PhpWord\SimpleType\JcTable::CENTER);
        $phpWord->addTableStyle('Colspan Rowspan', $fancyTableStyle);

        $section->addText('                       Curriculum Vitae',$title);
        $section->addTextBreak(3);
        $styleTable = [ ];
        $phpWord->addTableStyle('Colspan Rowspan', $styleTable);
        $table = $section->addTable('Colspan Rowspan',$fancyTableStyle);

        $row = $table->addRow();
        $row->addCell(null,$fancyTableStyle, ['vMerge' => 'restart'])->addImage("public/upload/".$Hinh,
                    array(
                        'width'         => 150,
                        'height'        => 200,
                        'marginTop'     => -1,
                        'marginLeft'    => -1,
                        'wrappingStyle' => 'behind'
                    ));
        $row->addCell(null,$fancyTableStyle, ['vMerge' => 'continue']);

        $row = $table->addRow();
        $row->addCell(5000,$fancyTableStyle)->addText('    Họ và tên: ');
        $row->addCell(5000,$fancyTableStyle)->addText('     '.$request->inputHo);

        $row = $table->addRow();
        $row->addCell(5000,$fancyTableStyle)->addText('    Ngày sinh: ');
        $row->addCell(5000,$fancyTableStyle)->addText('     '.$request->inputNgaysinh);

        $row = $table->addRow();
        $row->addCell(5000,$fancyTableStyle)->addText('    Giới tính: ');
        if($request->inputGioitinh==1)
            $gt='nam';
        else
            $gt='nữ';
        $row->addCell(5000,$fancyTableStyle)->addText('     '.$gt);

        $row = $table->addRow();
        $row->addCell(5000,$fancyTableStyle)->addText('    Email: ');
        $row->addCell(5000,$fancyTableStyle)->addText('     '.$request->inputEmail);

        $row = $table->addRow();
        $row->addCell(5000,$fancyTableStyle)->addText('    SĐT: ');
        $row->addCell(5000,$fancyTableStyle)->addText('     '.$request->inputSdt);

        $row = $table->addRow();
        $row->addCell(5000,$fancyTableStyle)->addText('    Quê quán: ');
        $row->addCell(5000,$fancyTableStyle)->addText('     '.$request->inputQuequan);
        $section->addTextBreak(2);
       // Line
        

        $styleTablegt = ['borderSize' => 0, 'borderColor' => '999999', 'bgColor'=>'CBDDFF'];
        $phpWord->addTableStyle('Colspan Rowspan', $styleTablegt);
        
        $section->addText('Trình độ học vấn',$fontStyleName);
        $section->addLine(
            array(
                'width'       => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(6),
                'height'      => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(0),
                'positioning' => 'absolute',
            )
        );

        $styleTable21 = array('borderSize' => 6, 'borderColor' => 'black','color'=>'white','valign'=>'center', 'cellMargin' => 80, 'alignment' => \PhpOffice\PhpWord\SimpleType\JcTable::CENTER);
        $phpWord->addTableStyle('Colspan Rowspan', $styleTable21);
        $table22 = $section->addTable('Colspan Rowspan');

        $row22 = $table22->addRow();
        $row22->addCell(5000, $styleTable21)->addText('  Năm nhập học');
        $row22->addCell(5000, $styleTable21)->addText('  Năm tốt nghiệp');
        $row22->addCell(5000, $styleTable21)->addText('  Trường tốt nghiệp');
        $row22->addCell(5000, $styleTable21)->addText('  Ngành tốt nghiệp');

        for ($i=0; $i < $biendem; $i++) { 
            if($request->truong_tot_nghiep[$i]!=null && $request->nam_tot_nghiep[$i]!=null){
                $row22 = $table22->addRow();
                
                $row22->addCell(1000, $styleTable21)->addText('  '.$request->nam_nhap_hoc[$i]);
                $row22->addCell(1000, $styleTable21)->addText('  '.$request->nam_tot_nghiep[$i]);
                $row22->addCell(1000, $styleTable21)->addText('  '.$request->truong_tot_nghiep[$i]);
                $row22->addCell(1000, $styleTable21)->addText('  '.$request->nganh_tot_nghiep[$i]);
                
            }
        }
        $section->addTextBreak(3);

        $tablenn = $section->addTable('Colspan Rowspan');
        $row = $tablenn->addRow();
        $row->addCell(5000,$styleTable21)->addText('Ngoại ngữ');
        $row->addCell(5000,$styleTable21)->addText('Trình độ');
         
        if (isset($request->ngoaingu)) {
            foreach ($request->ngoaingu as $key) {
                 
                if($key =="anh" && isset($request->$key)){
                    
                    foreach ($request->$key as $value) {
                        $row = $tablenn->addRow();
                        $row->addCell(5000,$styleTable21)->addText($value);
                        $row->addCell(5000,$styleTable21)->addText($request->$value);
                      
                    }
                }else{
                    
                    if($key == "nhat" ){
                        if($request->$key!=null){
                            $row = $tablenn->addRow();
                            $row->addCell(5000,$styleTable21)->addText("Tiếng nhật");
                            $row->addCell(5000,$styleTable21)->addText($request->$key);
                        }
                        
                    }else{
                        if($request->$key!=null){
                            $row = $tablenn->addRow();
                            $row->addCell(5000,$styleTable21)->addText("Tiếng trung");
                            $row->addCell(5000,$styleTable21)->addText($request->$key);
                        }
                    }
                }               
            }
        }
        $section->addTextBreak(3);
        $section->addText('Kỹ năng chuyên môn',$fontStyleName);
        $section->addLine(
            array(
                'width'       => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(6),
                'height'      => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(0),
                'positioning' => 'absolute',
            )
        );

        
        $table1 = $section->addTable('Colspan Rowspan');

        $row1 = $table1->addRow();
        $row1->addCell(5000,$fancyTableStyle )->addText('  Tên chuyên môn');
        $row1->addCell(5000,$fancyTableStyle )->addText('  Kinh nghiệm');
        

        if(isset($request->os)){
            foreach ($request->os as $key) {
                $f= changeTitle($key);
                
                $row1 = $table1->addRow();
                $row1->addCell(5000,$fancyTableStyle)->addText('  '.$key);
                $row1->addCell(5000,$fancyTableStyle)->addText('  '.$request->$f);
                
            }
        }
        
        if(isset($request->db)){
            foreach ($request->db as $key) {
                $f= changeTitle($key);
                
                $row1 = $table1->addRow();
                $row1->addCell(5000,$fancyTableStyle)->addText('  '.$key);
                $row1->addCell(5000,$fancyTableStyle)->addText('  '.$request->$f);
             
            }
        }
       
        if(isset($request->ide)){
            foreach ($request->ide as $key) {
                $f= changeTitle($key);
                
                $row1 = $table1->addRow();
                $row1->addCell(5000,$fancyTableStyle)->addText('  '.$key);
                $row1->addCell(5000,$fancyTableStyle)->addText('  '.$request->$f);
              
            }
        }
        
        if(isset($request->web)){
            foreach ($request->web as $key) {
                $f= changeTitle($key);
                
                $row1 = $table1->addRow();
                $row1->addCell(5000,$fancyTableStyle)->addText('  '.$key);
                $row1->addCell(5000,$fancyTableStyle)->addText('  '.$request->$f);
             
            }
        }
        $section->addText('Kiến thức khác: ');
        $textrun = $section->addTextRun();
        $textrun1 = $section->addTextRun();
        
        if(isset($request->vphong)){
            $textrun->addText("Tin học văn phòng: ");
            foreach ($request->vphong as $key) {
                $textrun->addText($key.', ');
            }
        }

        if(isset($request->kthuckhac)){
            $textrun1->addText("Kiến thức khác: ");
            foreach ($request->kthuckhac as $key) {
                $textrun1->addText($key.', ');
            }
        }
 
        $section->addTextBreak(3);
        $section->addText('Kinh nghiệm làm việc',$fontStyleName);
        $section->addLine(
            array(
                'width'       => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(6),
                'height'      => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(0),
                'positioning' => 'absolute',
            )
        );
        $styleTable = ['borderSize' => 0, 'borderColor' => '999999'];
        $phpWord->addTableStyle('Colspan Rowspan', $styleTable);
        $table2 = $section->addTable('Colspan Rowspan');

        $row2 = $table2->addRow();
        $row2->addCell(5000, $fancyTableStyle)->addText('  Thời gian bắt đầu làm việc');
        $row2->addCell(5000, $fancyTableStyle)->addText('  Thời gian kết thúc làm việc');
        $row2->addCell(5000, $fancyTableStyle)->addText('  Nơi làm việc');
        $row2->addCell(5000, $fancyTableStyle)->addText('  Vị trí làm việc');
        

        for ($i=0; $i < $countkn; $i++) { 
            if($request->noilamviec[$i]!=null && $request->vitrilamviec[$i]!=null){
                $row2 = $table2->addRow();
                
                $row2->addCell(1000, $fancyTableStyle)->addText('  '.$request->thoigianbatdau[$i]);
                $row2->addCell(1000, $fancyTableStyle)->addText('  '.$request->thoigianketthuc[$i]);
                $row2->addCell(1000, $fancyTableStyle)->addText('  '.$request->noilamviec[$i]);
                $row2->addCell(1000, $fancyTableStyle)->addText('  '.$request->vitrilamviec[$i]);
                
                
            }
        }
        $section->addTextBreak(3);
        $section->addText('Dự án thực tế',$fontStyleName);
        $section->addLine(
            array(
                'width'       => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(6),
                'height'      => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(0),
                'positioning' => 'absolute',
            )
        );
        $styleTable = ['borderSize' => 0, 'borderColor' => '999999'];
        $phpWord->addTableStyle('Colspan Rowspan', $styleTable);
        
        $tenduanstyle = 'r1Style';
        $phpWord->addFontStyle($tenduanstyle, array('bold' => true, 'italic' => true,  'color' => '0E628B','background'=>'green'));
        
        $styleTable = [ ];
        $phpWord->addTableStyle('Colspan Rowspan', $fancyTableStyle1);
        

        

        for ($i=0; $i < $countda; $i++) { 
            $table = $section->addTable('Colspan Rowspan',$fancyTableStyle);
            if($request->inputTen_du_an[$i]!=null && $request->inputTom_tat_du_an[$i]!=null){
                  
                $row = $table->addRow();
                $row->addCell(2500,$fancyTableStyle)->addText('    Tên dự án: ');
                $row->addCell(7000,$fancyTableStyle)->addText('   '.$request->inputTen_du_an[$i]);                    
                     
                $row = $table->addRow();
                $row->addCell(null,$fancyTableStyle)->addText('    Tóm tắt dự án: ');
                $row->addCell(null,$fancyTableStyle)->addText('   '.$request->inputTom_tat_du_an[$i]);

                $row = $table->addRow();
                $row->addCell(5000,$fancyTableStyle)->addText('    Thời gian: ');

                $row->addCell(5000,$fancyTableStyle)->addText('   '.$request->inputTime_begin_du_an[$i].' - '.$request->inputTime_end_du_an[$i]);

                $row = $table->addRow();
                $row->addCell(null,$fancyTableStyle)->addText('    Số người tham gia dự án: ');
                $row->addCell(5000,$fancyTableStyle)->addText('   '.$request->inputSo_nguoi_du_an[$i]);

                $row = $table->addRow();
                $row->addCell(null,$fancyTableStyle)->addText('    Chi tiết dự án: ');
                $row->addCell(5000,$fancyTableStyle)->addText('   '.$request->inputChi_tiet_du_an[$i]);

                $row = $table->addRow();
                $row->addCell(null,$fancyTableStyle)->addText('    Vai trò trong dự án: ');
                $row->addCell(5000,$fancyTableStyle)->addText('   '.$request->inputVai_tro_trong_du_an[$i]);

                $row = $table->addRow();
                $row->addCell(null,$fancyTableStyle)->addText('    Vai trò cụ thể trong dự án: ');
                $row->addCell(5000,$fancyTableStyle)->addText('   '.$request->inputCongviec_cuthe_du_an[$i]);

                $row = $table->addRow();
                $row->addCell(null,$fancyTableStyle)->addText('    Môi trường phát triển: ');
                $row->addCell(5000,$fancyTableStyle)->addText('   '.$request->inputEnviroment_du_an[$i]);
                
                $row = $table->addRow();
                $row->addCell(null,$fancyTableStyle)->addText('    Ngôn ngữ sử dụng trong dự án: ');
                $row->addCell(5000,$fancyTableStyle)->addText('   '.$request->inputNgonngu_trong_du_an[$i]);
                
                $section->addTextBreak();
            }
        }

        $tablegt = $section->addTable('Colspan Rowspan');

        $rowgt = $tablegt->addRow();
        
        $rowgt->addCell(10000)->addText('Tính cách và sở thích',$fontStyleName);
        $section->addLine(
            array(
                'width'       => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(6),
                'height'      => \PhpOffice\PhpWord\Shared\Converter::cmToPixel(0),
                'positioning' => 'absolute',
            )
        );
        // 5. Nested table
        $section->addText('- Tính cách: '.$request->tinhcach);
        $section->addText('- Ước mơ: '.$request->uocmo);
        $section->addText('- Khả năng đặc biệt: '.$request->khanang);
        $section->addText('- Lý do đến nhật: '.$request->lydo);
        $textrunsothich = $section->addTextRun();
        $textrunsothich->addText('- Sở thích: ');
        if(isset($request->sothich)){
            foreach ($request->sothich as $key) {
               
                if(isset($request->$key)){
                    foreach ($request->$key as $value) {
                        $textrunsothich->addText($value.', ');
                    }
                }
            }
        }
        $section->addTextBreak(3);



        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $ppto=changeTitle($request->inputHo).'_'.$ldate;
        $objWriter->save('public\file\cv_'.$ppto.'.docx');
        return redirect('html_email/'.$ppto);
    }
}
