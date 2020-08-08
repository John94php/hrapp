<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;
class UploadController extends Controller
{
    //
    public function index() {
        $data = Upload::join('contracts','contracts.id_contract','uploads.id')->get();

        return view('uploadslist',['data'=>$data])->with('title','Lista wniosków o zmianę danych ');
    }

}
