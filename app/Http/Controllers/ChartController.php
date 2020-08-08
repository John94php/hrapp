<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contract;
use DB;
class ChartController extends Controller
{
    public function highchart() {
        $typeContractuop = "Umowa o pracę";
        $typeContractuz = "Umowa Zlecenie";
        $namesArray = array("Umowa o pracę","Umowa Zlecenie");
                //Umowa o Pracę z podziałem na miesiące i lata; do grudnia 2025
                
                $uop = Contract::select(\DB::raw("COUNT(*) as count"))->where('typeContract','Umowa o pracę')
                ->whereYear('dateContract', date('Y'))
                ->groupBy(\DB::raw("Month(dateContract)"))
                ->pluck('count');
                $uz = Contract::select(\DB::raw("COUNT(*) as count"))->where('typeContract','Umowa Zlecenie')
                ->whereYear('dateContract', date('Y'))
                ->groupBy(\DB::raw("Month(dateContract)"))
                ->pluck('count');
        

        return view('chart',compact('uop','uz'));
    }
}
