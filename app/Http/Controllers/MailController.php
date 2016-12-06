<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
$GLOBALS['ppto'] = '';
 
use Mail;
class MailController extends Controller
{
    public function basic_email(){
    	$data=['name'=>'Harison matondang'];
        Mail::send(['text'=>'mail'], $data, function($message){
            $message->to('dovanhungk57@gmail.com','Harison Matondang')->subject('Send Mail from Laravel with Basics Email');
            $message->from('dovanhungcis@gmail.com','Nabila');
        });
        echo 'Basics Email was sent!';
    }
    //html mal
    public function html_email($ppto){
        $GLOBALS['ppto']=$ppto;
        print_r($GLOBALS['ppto']);
    	$data=['name'=>'Portgas D. Ace'];
    	Mail::send(['text'=>'mail'],$data,function($message){
    		$message->to('nhung@mediabridge.vn','Nguyễn Thị Nhung')->subject('Có cv mới');
            $message->to('dovanhungk57@gmail.com','Nguyễn Thị Nhung')->subject('Có cv mới');
    		$message->attach('public\file\cv_'.$GLOBALS['ppto'].'.docx');
    		$message->from('dovanhungcis@gmail.com','Portgas D. Ace');
    	});
    	return redirect('/')->with('thongbaothanhcong','Đã gửi thành công.');
    }
    //tao function send mail
     
}
