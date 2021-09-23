<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactController extends Controller
{

        public function contact(){
            return 'Message has been send sucssefuly';
    }

        public function booking(){

            $data = request(['name', 'email','phone','date','time','people', 'message']);
            return $data;
    }
}
