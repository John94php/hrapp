<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contract;
use App\TerminationPDF;
use PDF;
class TerminationController extends Controller
{
    
    public function show($id,$name_contract,$surname_contract,$pesel_contract,$document_contract,$telephone_contract,$email_contract,$corrCountry,$corrCode,$corrCity,$corrStreet,$corrHouse,$corrFlat,$regCountry,$regCode,$regCity,$regStreet,$regHouse,$regFlat,$typeContract,$dateContract) 
    {   $data =  Contract::all();
        $fname = TerminationPDF::where('pesel_contract','=',$pesel_contract)->first();
        if($fname == null) {
            return view('termination',compact('id','name_contract','surname_contract','pesel_contract','document_contract','telephone_contract','email_contract','corrCountry','corrCode','corrCity','corrStreet','corrHouse','corrFlat','regCountry','regCode','regCity','regStreet','regHouse','regFlat','typeContract','dateContract'))->with('title','Wniosek o rozwiązanie umowy')->with('companyName','PZU')->with('companyAddress','80-175 Gdańsk ul. Pałubickiego 2 ')->with('companyCity','Gdańsk')->with('fnameCompany','PZU S.A');

        }
        else {
                $html = "<h1>Ten pracownik miał wygenerowane wypowiedzenie</h1><a href='/list'>Powrót do listy umów</a>";
                return $html;
        }

    }
    public function index() {
        $data =  Contract::all();

return view('termination',['data'=>$data])->with('title',"Złoż wniosek o wypowiedzenie umowy")->with('companyName','PZU');
    }
    public function store(Request $req) {
        $data = new TerminationPDF;
        $data->companyName = $req->companyName;
        $data->companyAddress = $req->companyAddress;
        $data->fname = $req->fname;
        $data->regAddress = $req->regAddress;
        $data->corrAddress = $req->corrAddress;
        $data->pesel_contract = $req->pesel_contract;
        $data->typeContract = $req->typeContract;
        $data ->dateContract = $req->dateContract;
        $data->fnameCompany = $req->fnameCompany;
        $data->terminationdata = $req->terminationdata;
        $data->created_at = $req->created_at;
        $data->save();
        $show = TerminationPDF::find($data);
        $pdf = PDF::loadView('pdf', compact('show'));
        
        return $pdf->download('Wniosek o rozwiązanie umowy.pdf');
    }
}
