<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\grades;

class gradesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
$grades = new grades();
$grades->gNo="33";
$grades->esNo="232";
$grades->sNo="1";
$grades->prelim="3";
$grades->midterm="1";
$grades->finals="3";
$grades->remarks="fail";
$grades->save();
echo "grade is successfully created";






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
