<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

use Auth;

class FrontController extends Controller
{
 
    public function index()
    {
      $cities = DB::table('tcities')->get();
      return view('front.index', compact('cities'));
    }

    public function GetAreas(Request $request)
    {
      $city = $request->city;
      $areas = DB::table('tareas')->where('fcity_name',$city)->select('farea_name')->orderBy('farea_name','asc')->get();
      $output = "";
      $output .="<option value=''>Select one</option>";
      foreach ($areas as $area) 
      {
            $output .="<option value='".$area->farea_name."'>".$area->farea_name."</option>";
      }

         $data = array(
            'areas'		=>	$output,
         );	

     return json_encode($data);
     //var_dump($areas);

    }

    public function Restaurants(Request $request)
    {
      return view('front.restaurants');
    }

}
