<?php
// app/Http/Controllers/ActivityController.php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::all();

        return view('activities.index', compact('activities'));
    }

    public function create()
    {
        return view('activities.create');
    }

    public function store(Request $request)
    {
        $activity = Activity::create($request->all());

        return redirect()->route('activities.index')->with('success', 'Activity created successfully');
    }

    public function show(Activity $activity)
    {
        return view('activities.show', compact('activity'));
    }

    public function edit(Activity $activity)
    {
        return view('activities.edit', compact('activity'));
    }

    public function update(Request $request, Activity $activity)
    {
        $activity->update($request->all());

        return redirect()->route('activities.index')->with('success', 'Activity updated successfully');
    }

    public function destroy(Activity $activity)
    {
        $activity->delete();

        return redirect()->route('activities.index')->with('success', 'Activity deleted successfully');
    }
}
