<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sleeping;

class SleepingController extends Controller
{
    public function index()
    {
        $sleepingItems = Sleeping::orderBy('check_in')->get();

        return view('sleeping.index', compact('sleepingItems'));
    }

    public function create()
    {
        return view('sleeping.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'check_in' => 'required|date',
            'check_out' => 'required|date',
            'stars' => 'required|integer',
        ]);

        $sleepingItem = new Sleeping();
        $sleepingItem->name = $request->input('name');
        $sleepingItem->location = $request->input('location');
        $sleepingItem->check_in = $request->input('check_in');
        $sleepingItem->check_out = $request->input('check_out');
        $sleepingItem->stars = $request->input('stars');
        $sleepingItem->description = $request->input('description');
        
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('public/sleeping');
            $sleepingItem->photo = $photoPath;
        }
        
        $sleepingItem->save();

        return redirect()->route('sleeping.index')->with('success', 'Sleeping item created successfully.');
    }

    // Otros métodos como edit, update, destroy, etc.

}
