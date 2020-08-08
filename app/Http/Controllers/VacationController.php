<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacation;
use Illuminate\Support\Facades\DB;
class VacationController extends Controller
{
    public function index() {
                $data = Vacation::join('contracts','contracts.id_contract','vacations.id_vacation')->get();
//$data =                 Vacation::join('contracts')->join('vacations.id_contract','contracts.id_contract')->get();
                return view('vacationlist',['data'=>$data])->with('title','Lista wszystkich wniosków urlopowych');

        }

}
