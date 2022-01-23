<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer.customer', [
            'areas' => Area::all()
        ]);
    }

    public function store(Request $request)
    {
        if (count($request->area_id) > 0){
            foreach ($request->area_id as $data=>$value){
                $customerDetail = array(
                    'area_id' => $request->area_id[$data],
                    'code' => $request->code[$data],
                    'name' => $request->name[$data],
                    'age' => $request->age[$data],
                );
                Customer::create($customerDetail);
            }
        }

        return redirect()->back();

    }
}
