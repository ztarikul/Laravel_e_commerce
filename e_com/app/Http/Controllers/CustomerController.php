<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

  


    public function store(Request $request)
    {
        //
    
    }

    public function registration()
    {
        //
        return view('customer_auth.registration');
    }



    public function customerRegistration(Request $request)
    {
        //
        // dd($request);
        $request->validate([
         'email' => 'required|unique:customers',
         'name' => 'required',
         'phone' =>'required|numeric|min:11',
         'password' => 'required|confirmed|min:6|max:16',
          
        ]);
        // dd($request);
        $customer = new Customer;
        $customer->email = $request->email;
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->password = Hash::make($request->password);
        $query = $customer->save();
        if($query){
            return back()->with('success','Your account has been  successfully created');
        }
        else{
            return back()->with('fail','Something went wrong');
        }
    
    }
   



    public function login()
    {
        //
        return view('customer_auth.login');
    }
  
    public function customer_loginAuthenticate(Request $request)
    {
        //
        // dd($request);
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6|max:16',
             
           ]);
      
        $customer = Customer::where('email', $request['email'])->first();
        if($customer){
           if(Hash::check($request['password'], $customer->password)){
             $request->session()->put('LoggedCustomer',$customer->id);
             return redirect()->route('home');

           }
         else{
             return back()->with('fail','Invalid Password');
         }

        }
        else{
            return back()->with('fail','No account found for the email');
        
        }

    }






    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function customer_logout()
    {
        if(session()->has('LoggedCustomer')){
            session()->pull('LoggedCustomer');
            return redirect()->route('home');
        }
    }
}
