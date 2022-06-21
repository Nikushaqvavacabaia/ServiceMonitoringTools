<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
class PageController extends Controller
{
    public function home(){
        
        $list=array();
        $transdate = date('m-d-Y', time());
        $month = date('m');
        $year = 2022;
        for($d=1; $d<=31; $d++)
        {
            $time=mktime(12, 0, 0, $month, $d, $year);          
            if (date('m', $time)==$month)       
                $list[]=date('Y-M', $time);
        }
        return view('index')->with('list', $list);
    }
    public function fbn(){

        $list=array();
        $transdate = date('m-d-Y', time());
        $month = date('m');
        $year = 2022;
        for($d=1; $d<=31; $d++)
        {
            $time=mktime(12, 0, 0, $month, $d, $year);          
            if (date('m', $time)==$month)       
                $list[]=date('Y-m-d-D', $time);
        }
        return view('fbn')->with('list', $list);;
    }
    public function isp(){

        $list=array();
        $transdate = date('m-d-Y', time());
        $month = date('m');
        $year = 2022;
        for($d=1; $d<=31; $d++)
        {
            $time=mktime(12, 0, 0, $month, $d, $year);          
            if (date('m', $time)==$month)       
                $list[]=date('Y-m-d-D', $time);
        }
        return view('isp')->with('list', $list);;
    }
    public function slot(){

        $list=array();
        $transdate = date('m-d-Y', time());
        $month = date('m');
        $year = 2022;
        for($d=1; $d<=31; $d++)
        {
            $time=mktime(12, 0, 0, $month, $d, $year);          
            if (date('m', $time)==$month)       
                $list[]=date('Y-m-d-D', $time);
        }
        return view('slot')->with('list', $list);;
    }
}
