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

    public function edit(Sleeping $sleeping)
    {
        return view('sleeping.edit', compact('sleeping'));
    }

    public function destroy(Sleeping $sleeping)
    {
        $sleeping->delete();

        return redirect()->route('sleeping.index')->with('success', 'Sleeping item deleted successfully.');
    }

    public function update(Request $request, Sleeping $sleeping)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'check_in' => 'required|date',
            'check_out' => 'required|date',
            'stars' => 'required|integer',
        ]);

        $sleeping->name = $request->input('name');
        $sleeping->location = $request->input('location');
        $sleeping->check_in = $request->input('check_in');
        $sleeping->check_out = $request->input('check_out');
        $sleeping->stars = $request->input('stars');
        $sleeping->description = $request->input('description');
        
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('public/sleeping');
            $sleeping->photo = $photoPath;
        }
        
        $sleeping->save();

        return redirect()->route('sleeping.index')->with('success', 'Sleeping item updated successfully.');
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
