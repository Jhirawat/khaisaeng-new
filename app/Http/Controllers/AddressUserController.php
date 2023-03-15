<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\AddressUser;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddressUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.address');
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
    // $AddressUser = new AddressUser();

    // $AddressUser->name = $request->input('name');
    // $AddressUser->usernumber = $request->input('usernumber');
    // $AddressUser->address = $request->input('apt-number');
    // $AddressUser->address_addon = $request->input('addon');
    // $AddressUser->district = $request->input('district');
    // $AddressUser->pincode = $request->input('pincode');
    // $AddressUser->province = $request->input('province');
    // $AddressUser->add_type = $request->input('add-type');

    // $AddressUser->save();

    // return redirect()->route('user.address')->with('success', 'เพิ่มสำเสร็จ');
}


    public function show(AddressUser $address)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AddressUser  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(AddressUSer $address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AddressUser  $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddressUSer $address)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AddressUSer  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        //
    }
}