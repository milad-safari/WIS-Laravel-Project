<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CourseController extends Controller
{
    public function store(Request $request)
    {
        $request->merge([
    'course_code' => strtoupper(trim( $request->input('course_code', ''))),
]);
        $validated = $request->validate([
            'course_code' => [
                'required',
                'string',
                'max:255',
                'unique:courses,course_code',
            ],

            'course_name' => [
                'required',
                'string',
                'max:255',
            ],

            'hours_per_week' => [
                'required',
                'integer',
                'min:1',
                'max:255',
            ],

            'semester' => [
                'required',
                Rule::in(['Fall', 'Spring']),
            ],
        ]);

        Course::create($validated);

        return redirect()
            ->back()
            ->with('success', 'Course saved successfully!');
    }
}