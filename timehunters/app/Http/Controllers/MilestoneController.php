<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMilestoneRequest;
use App\Http\Requests\UpdateMilestoneRequest;
use App\Models\Milestone;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Carbon\Carbon;

class MilestoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('milestone');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMilestoneRequest $request)
    {
        $insert = Milestone::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'deadline' => Carbon::createFromFormat('d/m/Y', $request->input('deadline'))->format('Y-m-d h:i:s')
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Milestone $milestone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Milestone $milestone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMilestoneRequest $request, Milestone $milestone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Milestone $milestone)
    {
        //
    }
}
