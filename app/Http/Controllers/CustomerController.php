<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    // public function index(){
    //     return view('customer');
    // }

    public function create(){
        return view('customer');
    }

    public function store(Request $request){
    //    echo "<pre>";
    //    print_r($request->all());

    //    Insert Query
       $customer = new Customer;
       $customer->name = $request['name'];
       $customer->email = $request['email'];
       $customer->gender = $request['gender'];
       $customer->address = $request['address'];
       $customer->state = $request['state'];
       $customer->country = $request['country'];
       $customer->dob = $request['dob'];
       $customer->password = md5($request['password']);
       $customer->save();
       //---------

       return redirect('/customer');
    }

    public function view(){
        $customer = Customer::all();
        // echo "<pre>";
        // // print_r($customers->toArray());
        // print_r($customers);
        // echo "</pre>";
        // die;

        $data = compact('customer');
        return view('customer-view')->with($data);
    }

    // for testing delete query

    // public function delete($id){
    //     $customer= Customer::find($id);
    //     echo "<pre>";
    //     print_r($customer);
    // }


    // through url() method

    // public function delete($id){

    //     Customer::find($id)->delete();
    //     return redirect()->back();       
    // }

    
    // Through route method

    public function delete($id)
    {
        $customer = Customer::find($id);
        if(!is_null($customer)){
            $customer->delete;
        }
        return redirect('customer');       
    }
}
