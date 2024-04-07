<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnimalsRequest;
use App\Http\Requests\UpdateAnimalsRequest;
use App\Models\Animals;
use Illuminate\Support\Facades\Session;

use function Laravel\Prompts\error;

class AnimalsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('animals.index', ['animals' => Animals::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('animals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnimalsRequest $request)
    {
        Animals::create($request->validated());
        Session::flash('success', 'Animal added successfully');
        return redirect() -> route('animals.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Animals $animal)
    {
        $animal->load('feedingSchedules');
        return view('animals.show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animals $animal)
    {
        return view('animals.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnimalsRequest $request, Animals $animal)
    {
        // Update the model with the validated request data
        $animal->update($request->validated());
        Session::flash('success', 'Animal updated successfully');
        return redirect() -> route('animals.index');
    }

    /*** Remove the specified resource from storage.*/
    public function trash($id){
        Animals::Destroy($id);
        Session::Flash('success', 'Animal trashed successfully');
        return redirect() -> route('animals.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $animals = Animals::withTrashed() -> where('id', $id) -> first();
        $animals -> forceDelete();
        Session::Flash('success', 'Animals deleted successfully');
        return redirect() -> route('animals.index');
    }
    
    public function restore($id){
        $animals = Animals::withTrashed() -> where('id', $id) -> first();
        $animals -> restore();
        Session::Flash('success', 'Animals restored successfully');
        return redirect() -> route('animals.trashed');
    }
}
