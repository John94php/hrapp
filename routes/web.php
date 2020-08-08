<?php

use App\Upload;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcomelog',function () {
    return view('welcomelog');
});
Auth::routes();
Route::get('vacationlist','vacationController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('list','ListController@index');
Route::get('stats','StatsController@index');
Route::get('chat','ChatController@index');
Route::get('mail','MailController@index');
Route::get('details/{id_contract}/{name_contract}/{surname_contract}/{pesel_contract}/{document_contract}/{telephone_contract}/{email_contract}/{corrCountry}/{corrCode}/{corrCity}/{corrStreet}/{corrHouse}/{corrFlat}/{regCountry}/{regCode}/{regCity}/{regStreet}/{regHouse}/{regFlat}/{typeContract}/{dateContract}/{branchContract}','DetailsController@show');
Route::get('termination/{id}/{name_contract}/{surname_contract}/{pesel_contract}/{document_contract}/{telephone_contract}/{email_contract}/{corrCountry}/{corrCode}/{corrCity}/{corrStreet}/{corrHouse}/{corrFlat}/{regCountry}/{regCode}/{regCity}/{regStreet}/{regHouse}/{regFlat}/{typeContract}/{dateContract}','TerminationController@show');
//Route::get('vacation/{id}/{name_contract}/{surname_contract}/{pesel_contract}/{document_contract}/{telephone_contract}/{email_contract}/{corrCountry}/{corrCode}/{corrCity}/{corrStreet}/{corrHouse}/{corrFlat}/{regCountry}/{regCode}/{regCity}/{regStreet}/{regHouse}/{regFlat}/{typeContract}/{dateContract}','Vacationr@show');

Route::get('addemployee','AddController@index');
Route::post('submit','AddController@save'); //add employer
Route::post('addaccount','AddaccountController@save');
Route::post('submitMail','MailController@send'); // send mail
Route::post('answerMail','MailController@answer');
//Route::post('editEmployer','AddController@edit') //edit data of employer
Route::get('showMail/{title_mail}/{sender_mail}/{recipient_mail}/{text_mail}/{created_at}','MailController@show');
Route::get('/uploadslist','UploadController@index');
Route::get('acceptUploads/{id}/{name_contract}/{surname_contract}/{reason}/{newdata}/{olddata}','acceptUploadsController@index');
Route::post('/updateUploads','acceptUploadsController@accept');
Route::get('/chart','ChartController@highchart');
Route::get('edit/section1/{id_contract}/{name_contract}/{surname_contract}/{pesel_contract}/{document_contract}/{telephone_contract}/{email_contract}','EditController@contact');
Route::get('edit/section2/{id_contract}/{regCode}/{regCountry}/{regCity}/{regStreet}/{regHouse}/{regFlat}','EditController@addressreg');
Route::get('edit/section3/{id_contract}/{corrCode}/{corrCountry}/{corrCity}/{corrStreet}/{corrHouse}/{corrFlat}','EditController@addresscorr');
Route::get('edit/section4/{id_contract}/{typeContract}/{dateContract}/{branchContract}','EditController@contractdet');
Route::post('savename','EditController@savename');
Route::post('savecorr','EditController@savecorr');
Route::post('savereg','EditController@savereg');
Route::post('savecontract','EditController@savecontract');
Route::post('addpdf','TerminationController@store');
