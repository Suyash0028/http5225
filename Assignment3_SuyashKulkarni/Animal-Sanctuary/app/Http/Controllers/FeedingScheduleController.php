<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeedingScheduleRequest;
use App\Http\Requests\UpdateFeedingScheduleRequest;
use App\Models\Animals;
use App\Models\FeedingSchedule;
use Illuminate\Support\Facades\Session;

class FeedingScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('feedingSchedules.index', ['feedingSchedules' => FeedingSchedule::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retrieve all animals
        $animals = Animals::all();
        // Pass animals data to the create view - 
        return view('feedingSchedules.create', compact('animals'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFeedingScheduleRequest $request)
    {
        FeedingSchedule::create($request->validated());
        Session::flash('success', 'Schedule added successfully');
        return redirect() -> route('animals.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(FeedingSchedule $feedingSchedule)
    {
        $feedingSchedule->load('animals');
        return view('feedingSchedules.show', compact('feedingSchedule'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FeedingSchedule $feedingSchedule)
    {
        // Fetch animals data
        $animals = Animals::all();
        return view('feedingSchedules.edit', compact('feedingSchedule', 'animals'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFeedingScheduleRequest $request, FeedingSchedule $feedingSchedule)
    {
        // Update the model with the validated request data
        $feedingSchedule->update($request->validated());
        Session::flash('success', 'Schedule updated successfully');
        return redirect() -> route('animals.index');
    }

    /*** Remove the specified resource from storage.*/
    public function trash($id){
        FeedingSchedule::Destroy($id);
        Session::Flash('success', 'Schedule trashed successfully');
        return redirect() -> route('animals.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $schedule = FeedingSchedule::withTrashed() -> where('id', $id) -> first();
        $schedule -> forceDelete();
        Session::Flash('success', 'Schedule deleted successfully');
        return redirect() -> route('animals.index');
    }
    
    public function restore($id){
        $schedule = FeedingSchedule::withTrashed() -> where('id', $id) -> first();
        $schedule -> restore();
        Session::Flash('success', 'Schedule restored successfully');
        return redirect() -> route('feedingSchedules.trashed');
    }
}
