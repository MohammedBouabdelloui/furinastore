<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topup;
use App\Models\Advertisement;
//use Illuminate\Support\Facades\Request as FacadesRequest;
use Stevebauman\Location\Facades\Location;
use App\Models\Order;
class NavigationController extends Controller
{
    public function index(Request $request)
    {
        $topups = Topup::orderBy('topup_value')->take(4)->get();
        //$discounts = Discount::orderBy('topup_value')->take(6)->get();
        //$services = Service::orderBy('topup_value')->take(4)->get();
        $advertisements = Advertisement::orderBy('number_sales')->take(6)->get();
        //$orders = Order::all();
        
        $ip = $request->ip();
        $position = Location::get('41.87.159.255');
        notify()->success('فورينا ترحب بك في متجرها ⚡️', 'أهلا بك معنا');

        return view('index', compact('position', 'topups'  , 'advertisements'));

    }

    public function topup()
    {
        
        $topups = Topup::orderBy('topup_value')->get();
        return view('topup.index' , compact('topups', 'orders'));
    }

    public function advertisement(){
        $advertisements = Advertisement::limit(6)->get();
        return  view('advertisement.index' , compact('advertisements'));
    }
    public function advertisement_details($id){
        $advertisement = Advertisement::findOrFail($id);
        return view('advertisement.show' ,compact('advertisement'));
    }
}
