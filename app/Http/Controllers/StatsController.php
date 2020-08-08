<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database;
use App\Contract;
class StatsController extends Controller
{

    public function index() {
        $date1 = date('Y-m-d');
        $date2 = date('Y-m-d',strtotime('-7 days'));
        $date3 = date('Y-m-d',strtotime('-1 month'));
        $date4 = date('Y-m-d',strtotime('-1 year'));
        
        $statsweek = Contract::select('dateContract')->whereBetween('dateContract',[$date2,$date1])->get();
        $statsmonth = Contract::select('dateContract')->whereBetween('dateContract',[$date3,$date1])->get();
        $statsyear = Contract::select('dateContract')->whereBetween('dateContract',[$date4,$date1])->get();
        $mandateweek = Contract::select('dateContract')->whereBetween('dateContract',[$date2,$date1])->where('typeContract',"=","Umowa zlecenie")->get();
        $mandatemonth = Contract::select('dateContract')->whereBetween('dateContract',[$date3,$date1])->where('typeContract',"=","Umowa zlecenie")->get();
        $mandateyear = Contract::select('dateContract')->whereBetween('dateContract',[$date4,$date1])->where('typeContract',"=","Umowa zlecenie")->get();
        $employmentweek = Contract::select('dateContract')->whereBetween('dateContract',[$date2,$date1])->where('typeContract',"=","Umowa o pracę")->get();
        $employmentmonth = Contract::select('dateContract')->whereBetween('dateContract',[$date3,$date1])->where('typeContract',"=","Umowa o pracę")->get();
        $employmentyear = Contract::select('dateContract')->whereBetween('dateContract',[$date4,$date1])->where('typeContract',"=","Umowa o pracę")->get();


        $numweek = count($statsweek);
        $nummonth = count($statsmonth);
        $numyear = count($statsyear);
        $nummandateweek =count($mandateweek);
        $nummandatemonth = count($mandatemonth);
        $nummandateyear = count($mandateyear);
        $numemploymentweek = count($employmentweek);
        $numemploymentmonth = count($employmentmonth);
        $numemploymentyear = count($employmentyear);
        $timeweek = date('Y-m-d').' - '.date('Y-m-d',strtotime('-7 days'));
        $timemonth = date('Y-m-d').' - '.date('Y-m-d',strtotime('-1 month'));
        $timeyear = date('Y-m-d').' - '.date('Y-m-d',strtotime('-1 year'));
        return view('stats')->with('title',"Statystyki")
        ->with('timeweek',$timeweek) 
        ->with('timemonth',$timemonth)
        ->with('timeyear',$timeyear)
        ->with('numweek',$numweek)
        ->with('nummonth',$nummonth)
        ->with('numyear',$numyear)
        ->with('nummandateweek',$nummandateweek)
        ->with('nummandatemonth',$nummandatemonth)
        ->with('nummandateyear',$nummandateyear)
        ->with('numemploymentweek',$numemploymentweek)
        ->with('numemploymentmonth',$numemploymentmonth)
        ->with('numemploymentyear',$numemploymentyear);


          }
}
