<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\enrolledSubjects;

class enrolledSubjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $enrolledSubjects = new enrolledSubjects();
     $enrolledSubjects->esno="232";
     $enrolledSubjects->subjectCode="IT Elect 3";
     $enrolledSubjects->description="madugo";
     $enrolledSubjects->units="3";
     $enrolledSubjects->schedule="monday";
     $enrolledSubjects->save();
     echo "enrolled subs";
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
