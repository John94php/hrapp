<?php

namespace App\Http\Controllers;

use App\Upload;
use App\Contract;
use Illuminate\Http\Request;
use DB;
class acceptUploadsController extends Controller
{
    //
        public function index($id,$name_contract,$surname_contract,$reason,$newdata,$olddata) {
        $title = "Akceptacja wniosku";
        $fname = "Imię Nazwisko wnioskującego";
        $old = "Stare dane";
        $new = "Nowe dane";
        $labelclass="badge badge-dark";
        $reasontitle = "Powód zmiany danych";
        return view('acceptUploads',compact('id','name_contract','surname_contract','reason','olddata','newdata'))
        ->with('title',$title)
        ->with('fname',$fname)
        ->with('old',$old)
        ->with('new',$new)
        ->with('labelclass',$labelclass)
        ->with('reasontitle',$reasontitle);


    }
    public function accept(Request $req) {
            $id = $req->input('id');
            $id_contract = $req->input('id_contract');
       $newdata = $req->input('newdata');
       $update = $req->input('modify_at');
       DB::update("UPDATE contracts SET document_contract=?, modify_atContract=? WHERE id_contract = ?",[$newdata,$update,$id]);
       DB::update("UPDATE uploads SET modify_at=? WHERE id = ?",[$update,$id]);
       echo "Dane zostały zmienione. <a href='/mail'>Przejdź do skrzynki mailowej aby wysłać powiadomienie</a>";
    }
}
