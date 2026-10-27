
@extends('layouts.app')

@section('title', 'Add New Course')

@section('page-container', 'dashboard-container')

@section('content')

<div class="container-fluid px-0">

    <!-- Page Heading -->
    <div class="d-flex flex-wrap justify-content-between
                align-items-center gap-3 mb-4">

        <div>
            <span class="badge rounded-pill text-bg-primary mb-2">
                COURSE MANAGEMENT
            </span>

            <h1 class="fw-bold mb-2" style="letter-spacing: -1px;">
                Add New Course
            </h1>

            <p class="text-secondary mb-0">
                Enter the details below to register a new course.
            </p>
        </div>

        <div class="rounded-4 d-flex align-items-center
                    justify-content-center"
             style="width: 65px; height: 65px;
                    background: #eef2ff; font-size: 32px;">
            📚
        </div>

    </div>

    <!-- Form Card -->
    <div class="card border-0 rounded-4 overflow-hidden"
         style="box-shadow: 0 12px 35px rgba(30,41,59,0.07);">

        <div class="card-body p-4 p-md-5">

            <div class="mb-4">
                <h5 class="fw-bold mb-1">Course Information</h5>
                <p class="text-secondary small mb-0">
                    All fields are required.
                </p>
            </div>

            <form onsubmit="return false;">

                <div class="row g-4">

                    <!-- Course Code -->
                    <div class="col-12 col-md-6">
                        <label for="course_code"
                               class="form-label fw-semibold">
                            Course Code
                        </label>

                        <input
                            type="text"
                            class="form-control form-control-lg rounded-3"
                            id="course_code"
                            name="course_code"
                            placeholder="e.g. CS101"
                            maxlength="255"
                            required>

                        <div class="form-text">
                            Enter a unique code for this course.
                        </div>
                    </div>

                    <!-- Course Name -->
                    <div class="col-12 col-md-6">
                        <label for="course_name"
                               class="form-label fw-semibold">
                            Course Name
                        </label>

                        <input
                            type="text"
                            class="form-control form-control-lg rounded-3"
                            id="course_name"
                            name="course_name"
                            placeholder="e.g. Web Development"
                            maxlength="255"
                            required>

                        <div class="form-text">
                            Write the full name of the course.
                        </div>
                    </div>

                    <!-- Hours per Week -->
                    <div class="col-12 col-md-6">
                        <label for="hours_per_week"
                               class="form-label fw-semibold">
                            Hours per Week
                        </label>

                        <div class="input-group input-group-lg">
                            <input
                                type="number"
                                class="form-control rounded-start-3"
                                id="hours_per_week"
                                name="hours_per_week"
                                placeholder="e.g. 3"
                                min="1"
                                max="255"
                                required>

                            <span class="input-group-text rounded-end-3">
                                Hours
                            </span>
                        </div>

                        <div class="form-text">
                            How many hours is this course taught weekly?
                        </div>
                    </div>

                    <!-- Semester -->
                    <div class="col-12 col-md-6">
                        <label for="semester"
                               class="form-label fw-semibold">
                            Semester
                        </label>

                        <select
                            class="form-select form-select-lg rounded-3"
                            id="semester"
                            name="semester"
                            required>

                            <option value="" selected disabled>
                                Choose a semester
                            </option>

                            <option value="Fall">
                                🍂 Fall — خزانی
                            </option>

                            <option value="Spring">
                                🌸 Spring — بهاری
                            </option>

                        </select>

                        <div class="form-text">
                            Select the semester for this course.
                        </div>
                    </div>

                </div>

                <!-- Buttons -->
                <div class="d-flex flex-column flex-sm-row
                            justify-content-end gap-3 mt-5 pt-4
                            border-top">

                    <button type="reset"
                            class="btn btn-light border rounded-3
                                   px-4 py-3 fw-semibold">
                        Clear Form
                    </button>

                    <button type="button"
                            class="btn btn-primary rounded-3
                                   px-5 py-3 fw-semibold shadow-sm">
                        Save Course &nbsp; →
                    </button>

                </div>

            </form>

        </div>
    </div>

    <!-- Footer Note -->
    <div class="text-center text-secondary small mt-4">
        <span>🔒</span>
        Course information will be managed through the Student Portal.
    </div>

</div>

<style>
    .dashboard-container .form-control,
    .dashboard-container .form-select {
        min-height: 54px;
        border-color: #e2e8f0;
        background-color: #f8fafc;
        font-size: 14px;
        transition: border-color .2s, box-shadow .2s,
                    background-color .2s;
    }

    .dashboard-container .form-control:focus,
    .dashboard-container .form-select:focus {
        background-color: #fff;
        border-color: #818cf8;
        box-shadow: 0 0 0 4px rgba(99,102,241,.12);
    }

    .dashboard-container .btn-primary {
        background: linear-gradient(135deg, #6366f1, #4f46e5);
        border: none;
        transition: transform .2s, box-shadow .2s;
    }

    .dashboard-container .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(99,102,241,.25);
    }

    .dashboard-container .form-text {
        line-height: 1.7;
    }
</style>

@endsection
