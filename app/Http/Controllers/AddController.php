<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Add;
use Illuminate\Support\Arr;

class AddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

            $list = array('1'=>'Dział IT','2'=>'Dział Analiz','Dział Operacji');
            return view('addemployee')->with('title',"Dodaj pracownika")->with('branchlist',$list);
    }
    function save(Request  $req){
//        print_r($req->input());
echo "Umowa została zapisana. ";
echo "Kliknij <a href='/addemployee'>tutaj</a> aby dodać kolejną umowę, lub <a href='/welcomelog'>tu</a> aby wrócić do strony głównej</a>";
        $data = new Add;
        $data->name_contract = $req->name_contract;
        $data->surname_contract = $req->surname_contract;
        $data->pesel_contract = $req->pesel_contract;
        $data->document_contract = $req->document_contract;
        $data->telephone_contract = $req->telephone_contract;
        $data->email_contract = $req->email_contract;
        $data->corrCountry = $req->corrCountry;
        $data->corrCode = $req->corrCode;
        $data->corrCity = $req->corrCity;
        $data->corrStreet = $req->corrStreet;
        $data->corrHouse = $req->corrHouse;
        $data->corrFlat = $req->corrFlat;
        $data->regCountry = $req->regCountry;
        $data->regCode = $req->regCode;
        $data->regCity = $req->regCity;
        $data->regStreet = $req->regStreet;
        $data->regHouse = $req->regHouse;
        $data->regFlat = $req->regFlat;
        $data->typeContract = $req->typeContract;
        $data->dateContract = $req->dateContract;
        $data->branchContract = $req->branchContract;
        $data->save();    

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
