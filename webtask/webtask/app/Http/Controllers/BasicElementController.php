<?php

namespace App\Http\Controllers;

use App\Models\basic_element;
use Illuminate\Http\Request;
use DB;
use Redirect;
class BasicElementController extends Controller
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\basic_element  $basic_element
     * @return \Illuminate\Http\Response
     */
    public function show(basic_element $basic_element)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\basic_element  $basic_element
     * @return \Illuminate\Http\Response
     */
    public function edit(basic_element $basic_element)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\basic_element  $basic_element
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, basic_element $basic_element)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\basic_element  $basic_element
     * @return \Illuminate\Http\Response
     */
    public function destroy(basic_element $basic_element)
    {
        //
    }
    // Crud Operation In PHP...........
    public function insertData(Request $req)
    {
      $basic=new basic_element;
      $basic->basic_name=$_POST['name'];
      $basic->basic_email=$_POST['email'];
      $basic->basic_password=$_POST['password'];
      $basic->basic_occupation=$_POST['occupation'];
      $basic->basic_phone_no=$_POST['phone_no'];
      $basic->basic_education=$_POST['education'];
      if($basic->save())
    {
        echo "Data save successfully!";
    }
    else
    {
        echo "error";
    }
    }
    public function getdata()
    {
        $query=basic_element::get();
        return view('basic_table',compact('query'));
    }
    public function dataDel($id)
    {
      $query=DB::table('basic_elements')->where('basic_id',$id)->delete();
      return Redirect::back()->withErrors(['msg'=>'The Message']);
    }
    public function dataEdit($id)
    {
    $query=DB::table('basic_elements')->where('basic_id',$id)->get();
    return view('basic_edit',compact('query'));    
    }
    public function updateData(Request $req)
    {
        $eid=$_POST['eid'];
        $basic_name=$_POST['name'];
        $basic_education=$_POST['education'];
        $query=basic_element::where('basic_id', $eid)
        ->update([
            'basic_name'=> $basic_name,
            'basic_education'=> $basic_education
            
        ]);
        return Redirect::back()->withErrors(['msg' => 'The Message']);
    }

}
