<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\studentInfo;

class studentInfoController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $studentInfo = new studentInfo();
        // $studentInfo->idNo = "C20-0348";
        // $studentInfo->firstName = "Kurt Ryan";
        // $studentInfo->middleName = "Abella";
        // $studentInfo->lastName = "Panong";
        // $studentInfo->suffix = "";
        // $studentInfo->course = "BSIT";
        // $studentInfo->year = "3";
        // $studentInfo->birthday = "2001-07-27";
        // $studentInfo->gender = "Male";
        // $studentInfo->save();
        // echo "Student information successfully saved in the database";


    //delete a record

    // $studentInfo = studentInfo::where('sno', 2);
    // $studentInfo->delete();
    // echo "Student info has successfully deleted"

    //update record

    // $studentInfo = studentInfo::where('sno', 1)
    // ->update(['firstName'=> 'Kurt John']);
    // echo "student info has been successfully updated";

//retrieve result
$studentInfo = studentInfo::all();
return $studentInfo;


}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

      //
      $studentInfo = new StudentInfo();
      $studentInfo->idNo = $request->xidNo;
      $studentInfo->firstName = $request->xfirstName;
      $studentInfo->middleName = $request->xmiddleName;
      $studentInfo->lastName = $request->xlastName;
      $studentInfo->suffix = $request->xsuffix;
      $studentInfo->course = $request->xcourse;
      $studentInfo->year = $request->xyear;
      $studentInfo->birthday = $request->xbirthday;
      $studentInfo->gender = $request->xgender;
      $studentInfo->save();
      return redirect()->route('students');



    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
