<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OilChange;
use Carbon\Carbon;

class OilChangeController extends Controller
{
    // Show form
    public function index()
    {
        return view('form');
    }

    // Handle form submission
    public function check(Request $request)
    {
        $validated = $request->validate([
            'current_odometer' => 'required|integer|min:0',
            'previous_odometer' => 'required|integer|min:0|lte:current_odometer',
            'previous_change_date' => 'required|date|before:today',
        ]);

        $oilChange = OilChange::create($validated);

        return redirect('/result/' . $oilChange->id);
    }

    // Show result page
    public function result($id)
    {
        $oilChange = OilChange::findOrFail($id);

        $kmDiff = $oilChange->current_odometer - $oilChange->previous_odometer;

        $monthsDiff = Carbon::parse($oilChange->previous_change_date)
            ->diffInMonths(now());

        $isDue = $kmDiff >= 5000 || $monthsDiff >= 6;

        return view('result', compact('oilChange', 'isDue', 'kmDiff', 'monthsDiff'));
    }
}