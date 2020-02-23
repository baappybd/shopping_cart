<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Shipping;
use Mail;
use Session;

class CheckoutController extends Controller
{
    // checkout
    public function index()
    {
        return view('front-end.checkout');
    }

   
    public function store(Request $request)
    {
        $customer =new Customer();
        $customer->fname = $request->fname;
        $customer->lname = $request->lname;
        $customer->email = $request->email;
        $customer->password = bcrypt($request->password);
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->save();
        $customer_id = $customer->id;
        Session::put('customer_id',$customer_id);
        Session::put('customer_name',$customer->fname. ' '.$customer->lname);
        $data = $customer->toArray();
        Mail::send('front-end.mail.conformation',$data,function($message) use ($data){
            $message->to($data['email']);
            $message->subject('Conformation Email');
        });

        return redirect('shipping');
    }


    public function shipping()
    {
        $customer = Customer::find(Session::get('customer_id'));
        return view('front-end.shipping',[
            'customer' => $customer
        ]);
    }

    public function payment()
    {
        return view('front-end.payment');
    }


}
