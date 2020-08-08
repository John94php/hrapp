<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Contract;

class AddaccountController extends Controller
{
        public function index() {
            $info = Contract::all();
            return view('addaccount',['info'=>$info])
            ->with('title','Utwórz konto pracownika');
        }

}
