<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Topup;
use App\Models\Reroll;
//use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use Stevebauman\Location\Facades\Location;

class NavigationController extends Controller
{
    public function index(Request $request)
    {
        $topups = Topup::orderBy('topup_value')->take(4)->get();
        //$discounts = Discount::orderBy('topup_value')->take(6)->get();
        //$services = Service::orderBy('topup_value')->take(4)->get();
        $advertisements = Advertisement::orderBy('number_sales')->take(6)->get();
        //$orders = Order::all();
        $rerolls = Reroll::orderBy('number_sales')->take(4)->get();
        
        $ip = $request->ip();
        $position = Location::get('41.87.159.255');
        notify()->success('فورينا ترحب بك في متجرها ⚡️', 'أهلا بك معنا');

        return view('index', compact('position', 'topups'  , 'advertisements', 'rerolls'));

    }

    public function topup()
    {
        $topups = Topup::orderBy('topup_value')->get();
        return view('topup.index' , compact('topups'));
    }

    public function advertisement(){
        $advertisements = Advertisement::get();
        return  view('advertisement.index' , compact('advertisements'));
    }

    public function advertisement_details($id){
        $advertisement = Advertisement::findOrFail($id);
        return view('advertisement.show' ,compact('advertisement'));
    }

    public function reroll_details($id){
        $reroll = Reroll::findOrFail($id);
        return view('reroll.show' ,compact('reroll'));
    }

    public function reroll(){
        $rerolls = Reroll::get();
        return  view('reroll.index' , compact('rerolls'));
    }

}
