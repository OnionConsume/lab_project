<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestResult;
use App\Http\Controllers\TestResultsController;
use App\Models\Result;

class TestResultsController extends Controller
{
    public function getHighestTestId()
    {
        $highestTestId = TestResult::max('test_id');
        return response()->json(['highest_test_id' => $highestTestId + 1]);
    }

    public function submitTestResult(Request $request)
    {
        // Result::create($request->all());
        // Validation
        $validatedData = $request->validate([
            'test_name' => 'required|string',
            'test_datetime' => 'required|date',
            'test_result' => 'required|in:positive,negative',
            'test_description' => 'nullable|string',
        ]);

        // Create new test result
        $testResult = new Result;
        $testResult->result = $request->test_result;
        $testResult->name = $request->test_name;
        $testResult->description = $request->test_description;
        $testResult->user_id = auth()->id();
        $testResult->save();

        return redirect()->back()->with('success', 'Test result submitted successfully.');
    }
}
