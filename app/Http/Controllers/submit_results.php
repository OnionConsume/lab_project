<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestResult;

class TestResultsController extends Controller
{
    public function submitTestResult(Request $request)
{
    // Handle form submission logic

    // Redirect to success page
    return redirect()->route('registration.success');
}

    public function submitResultsFromPHP(Request $request)
    {
        // Handle form submission logic
        // For example:
        $testResult = new TestResult;
        $testResult->test_name = $request->test_name;
        $testResult->test_id = $request->test_id;
        $testResult->test_datetime = $request->test_datetime;
        $testResult->test_result = $request->test_result;
        $testResult->test_description = $request->test_description;
        $testResult->save();

        // Redirect back or return a response
        return redirect()->back()->with('success', 'Test result submitted successfully.');
    }
}
