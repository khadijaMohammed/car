<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Modell;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $latest = Modell::latest()->take(4)->get();
        $blate = Brand::latest()->take(4)->get();
        $lates=    Modell::latest()->take(6)->get();
        return view('front.home', [
            'latest' => $latest,
            'lates' => $lates,
            'blate'=>$blate,
        ]);
    }

     public function vehiculs3()
    {
          $latest = Modell::latest()->take(6)->get();
        
            return view('front.vehiculs3', [
                'latest' => $latest,
              
            ]);  
    }
    
    public function vehiculs()
    {
          $oldest = Modell::oldest()->take(4)->get();
        
            return view('front.vehiculs', [
                'oldest' => $oldest,
              
            ]);  
    }

    public function vehicul()
    {
          $last = Modell::oldest()->take(1)->get();
          $latest = Modell::latest()->take(4)->get();
  
        
            return view('front.vehicul', [
                'last' => $last,
                'latest' => $latest,
              
            ]);  
    }

    public function contact()
    {
     
        
            return view('front.contact'); 
    }
}
