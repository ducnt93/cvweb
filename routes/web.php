<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

<<<<<<< HEAD
Route::get('/', 'Controller@welcome');
Route::post('luu','UserController@postLuu');
//Route::get('themkn','Controller@themkn');
//Route::get('themda','Controller@themda');
//Route::get('guimail','MailController@basic_email');
Route::get('/ajax/{idTheLoai}','SearchController@search');
Route::get('/ajaxtc/{idTheLoai}','SearchController@searchtc');
Route::get('html_email/{ppto}','MailController@html_email');
Route::get('exp/{mail}','UserController@xuatfile');
Route::group(['prefix'=>'admin'],function(){
    Route::get('trangadmin','admin\adminController@index');
    Route::group(['prefix'=>'hoso'],function(){
        Route::get('danhsachhoso','admin\adminController@danhsachhoso');
    });
});
/*Route::get('test', function() {

    $phpWord = new \PhpOffice\PhpWord\PhpWord();

    // Every element you want to append to the word document is placed in a section.
    // To create a basic section:
    $section = $phpWord->addSection();

    // After creating a section, you can append elements:
    $section->addText('Hello world!');

    // You can directly style your text by giving the addText function an array:
    $section->addText('Hello world! I am formatted.',
        array('name'=>'Tahoma', 'size'=>16, 'bold'=>true));

    // If you often need the same style again you can create a user defined style
    // to the word document and give the addText function the name of the style:
    $phpWord->addFontStyle('myOwnStyle',
        array('name'=>'Verdana', 'size'=>14, 'color'=>'1B2232'));
    $section->addText('Hello world! I am formatted by a user defined style',
        'myOwnStyle');

    // You can also put the appended element to local object like this:
    $fontStyle = new \PhpOffice\PhpWord\Style\Font();
    $fontStyle->setBold(true);
    $fontStyle->setName('Verdana');
    $fontStyle->setSize(22);
    $myTextElement = $section->addText('Hello World!');
    $myTextElement->setFontStyle($fontStyle);

    // Finally, write the document:
        // The files will be in your public folder
    $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
    $objWriter->save('public\file\helloWorld.docx');
 

});*/
=======
Route::get('/recruitment', ['as' => 'user.recruitment', 'uses' => 'UserController@recruitment']);
Route::post('/recruitment', ['as' => 'user.recruitmentPost', 'uses' => 'UserController@recruitmentPost']);
Route::get('/ajax/{idTheLoai}', ['as' => 'user.search', 'uses' => 'SearchController@search']);
Route::get('/ajaxtc/{idTheLoai}', ['as' => 'user.searchtc', 'uses' => 'SearchController@searchtc']);
Route::get('html_email/{ppto}', ['as' => 'user.html_email', 'uses' => 'MailController@html_email']);
Route::get('exp/{mail}', ['as' => 'user.xuatfile', 'uses' => 'UserController@xuatfile']);
>>>>>>> 756af31529eb35abd000dcd25f62a8d3e5e1112d
