<?php

namespace App\Http\Controllers;
use App\Contract;
use Illuminate\Http\Request;
use DB;
class EditController extends Controller
{
    //
    public function contact($id_contract,$name_contract,$surname_contract,$pesel_contract,$document_contract,$telephone_contract,$email_contract) {
    
        return view('edit.section1',compact('id_contract','name_contract','surname_contract','pesel_contract','document_contract','telephone_contract','email_contract'))
        ->with('title','Edycja danych kontaktowych i podstawowych')
        ->with('labelclass','badge badge-dark')
        ->with('label1','Imię')
        ->with('label2','Nazwisko')
        ->with('label3','E-mail')
        ->with('label4','Numer telefonu')
        ->with('label5','Dokument tożsamości')
        ->with('label6','numer PESEL');
    
    }
    public function addressreg($id_contract,$regCode,$regCountry,$regCity,$regStreet,$regHouse,$regFlat)
    {
        return view('edit.section2',compact('id_contract','regCode','regCountry','regCity','regStreet','regHouse','regFlat'))
        ->with('title','Edycja adresu zameldowania')
        ->with('labelclass','badge badge-dark')
        ->with('label1','Kraj')
        ->with('label2','Kod pocztowy')
        ->with('label3','Miejscowość')
        ->with('label4','Ulica')
        ->with('label5','Numer budynku')
        ->with('label6','Numer lokalu');
    }
    public function addresscorr($id_contract,$corrCode,$corrCountry,$corrCity,$corrStreet,$corrHouse,$corrFlat)
    {
        return view('edit.section3',compact('id_contract','corrCode','corrCountry','corrCity','corrStreet','corrHouse','corrFlat'))
        ->with('title','Edycja adresu zamieszkania')
        ->with('labelclass','badge badge-dark')
        ->with('label1','Kraj')
        ->with('label2','Kod pocztowy')
        ->with('label3','Miejscowość')
        ->with('label4','Ulica')
        ->with('label5','Numer budynku')
        ->with('label6','Numer lokalu');
    }
    public function contractdet($id_contract,$typeContract,$dateContract,$branchContract) {
        return view('edit.section4',compact('id_contract','typeContract','dateContract','branchContract'))
        ->with('title','Edycja danych dot. umowy')
        ->with('labelclass','badge badge-dark')
        ->with('label1','Typ umowy')
        ->with('label2','Data podpisania/modyfikacji umowy')
        ->with('label3','Dział');

    }
    public function savename(Request $r){
        $id =$r->input("id_contract");
        $name_contract= $r->input('name_contract');
        $surname_contract = $r->input('surname_contract');
        $email_contract = $r->input('email_contract');
        $telephone_contract = $r->input('telephone_contract');
        $document_contract = $r->input('document_contract');
        $pesel_contract = $r->input('pesel_contract');
        DB::update('UPDATE contracts SET name_contract =?,surname_contract =?,email_contract=?,telephone_contract=?,document_contract=?,pesel_contract=? WHERE id_contract =?',[$name_contract,$surname_contract,$email_contract,$telephone_contract,$document_contract,$pesel_contract,$id]);
            return back()->with('success','Dane zostały poprawione. ');
    }
    public function savecorr(Request $r) {
        $id = $r->input('id_contract');
        $corrCode = $r->input('corrCode');
        $corrCountry = $r->input('corrCountry');
        $corrCity = $r->input('corrCity');
        $corrStreet = $r->input('corrStreet');
        $corrHouse = $r->input('corrHouse');
        $corrFlat = $r->input('corrFlat');
        DB::update('UPDATE contracts SET corrCode =?,corrCountry =?,corrCity=?,corrStreet =?,corrHouse =?,corrFlat=? WHERE id_contract =?',[$corrCode,$corrCountry,$corrCity,$corrStreet,$corrHouse,$corrFlat,$id]);
            return back()->with('success','Dane zostały poprawione. ');
    
    }
    public function savereg(Request $r) {
        $id = $r->input('id_contract');
        $regCode = $r->input('regCode');
        $regCountry = $r->input('regCountry');
        $regCity = $r->input('regCity');
        $regStreet = $r->input('regStreet');
        $regHouse = $r->input('regHouse');
        $regFlat = $r->input('regFlat');
        DB::update('UPDATE contracts SET regCode =?,regCountry =?,regCity=?,regStreet =?,regHouse =?,regFlat=? WHERE id_contract =?',[$regCode,$regCountry,$regCity,$regStreet,$regHouse,$regFlat,$id]);
            return back()->with('success','Dane zostały poprawione. ');
    
    }
    public function savecontract(Request $r) {
        $id = $r->input('id_contract');
        $typeContract = $r->input('typeContract');
        $dateContract = $r->input('dateContract');
        $branchContract = $r->input('branchContract');
        DB::update('UPDATE contracts SET typeContract =?, dateContract=?,branchContract =? WHERE id_contract =?',[$typeContract,$dateContract,$branchContract,$id]);
        return back()->with('success','Dane zostały poprawione. ');

    }
}
