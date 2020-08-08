<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contract;

class DetailsController extends Controller
{
    public function show($id_contract,$name_contract,$surname_contract,$pesel_contract,$document_contract,$telephone_contract,$email_contract,$corrCountry,$corrCode,$corrCity,$corrStreet,$corrHouse,$corrFlat,$regCode,$regCountry,$regCity,$regStreet,$regHouse,$regFlat,$typeContract,$dateContract,$branchContract) 
    {   
        return view('details',compact('id_contract','name_contract','surname_contract','pesel_contract','document_contract','telephone_contract','email_contract','corrCountry','corrCode','corrCity','corrStreet','corrHouse','corrFlat','regCode','regCountry','regCity','regStreet','regHouse','regFlat','typeContract','dateContract','branchContract'))->with('title','Szczegóły umowy');
    }
}
