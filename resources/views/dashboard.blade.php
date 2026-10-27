
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f8fafc;
            color: #1e293b;
            font-family: Arial, sans-serif;
        }

        .dashboard-container {
            width: 100%;
            padding: 32px 40px;
        }

        /* Welcome Section */
        .welcome-banner {
            position: relative;
            overflow: hidden;
            background: linear-gradient(120deg, #ffffff 0%, #fff7db 100%);
            border: 1px solid #f3e5b5;
            border-radius: 20px;
            padding: 32px;
            margin-bottom: 35px;
        }

        .welcome-banner::after {
            content: "🎓";
            position: absolute;
            right: 55px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 95px;
            opacity: 0.15;
            pointer-events: none;
        }

        .welcome-label {
            display: inline-block;
            background: #fff0b3;
            color: #805b00;
            padding: 7px 14px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.5px;
            margin-bottom: 16px;
        }

        .welcome-title {
            font-size: clamp(26px, 3vw, 36px);
            font-weight: 800;
            margin-bottom: 12px;
            color: #1e293b;
        }

        .welcome-description {
            color: #64748b;
            max-width: 650px;
            line-height: 1.8;
            margin-bottom: 24px;
        }

        .welcome-info {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .info-item {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid #f0e6c9;
            padding: 11px 15px;
            border-radius: 12px;
            font-size: 13px;
            color: #475569;
            overflow-wrap: anywhere;
        }

        /* Course Form */
        .course-form {
            width: 100%;
            background: #ffffff;
            border: 1px solid #e8edf3;
            border-radius: 18px;
            padding: 32px;
            box-shadow: 0 5px 25px rgba(15, 23, 42, 0.04);
        }

        .form-heading {
            font-size: 25px;
            font-weight: 800;
            margin-bottom: 8px;
        }

        .form-description {
            color: #64748b;
            margin-bottom: 30px;
            line-height: 1.7;
        }

        .form-label {
            display: block;
            font-weight: 600;
            color: #334155;
            margin-bottom: 10px;
        }

        .form-control,
        .form-select {
            min-height: 52px;
            border: 1px solid #dbe2ea;
            border-radius: 10px;
            background-color: #f8fafc;
            padding: 12px 15px;
            font-size: 15px;
        }

        .form-control:focus,
        .form-select:focus {
            background-color: #ffffff;
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.12);
        }

        .form-control::placeholder {
            color: #94a3b8;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            border-top: 1px solid #e8edf3;
            margin-top: 12px;
            padding-top: 25px;
        }

        .btn {
            border-radius: 10px;
            padding: 11px 22px;
            font-weight: 600;
            transition: all 0.2s ease;
        }

        .btn-primary {
            background-color: #4f46e5;
            border-color: #4f46e5;
        }

        .btn-primary:hover {
            background-color: #4338ca;
            border-color: #4338ca;
            transform: translateY(-1px);
        }

        .btn-clear {
            background: #ffffff;
            border: 1px solid #dbe2ea;
            color: #475569;
        }

        .btn-clear:hover {
            background: #f1f5f9;
        }

        .alert {
            border-radius: 12px;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .dashboard-container {
                padding: 22px 18px;
            }

            .welcome-banner {
                padding: 25px 22px;
                margin-bottom: 25px;
            }

            .welcome-banner::after {
                right: 18px;
                top: 20px;
                transform: none;
                font-size: 48px;
            }

            .welcome-title {
                max-width: 85%;
                font-size: 27px;
            }

            .welcome-description {
                font-size: 14px;
            }

            .welcome-info {
                flex-direction: column;
                align-items: stretch;
            }

            .info-item {
                width: 100%;
            }

            .course-form {
                padding: 24px 20px;
            }

            .form-heading {
                font-size: 22px;
            }
        }

        @media (max-width: 480px) {
            .dashboard-container {
                padding: 15px 12px;
            }

            .welcome-banner {
                padding: 22px 17px;
            }

            .welcome-title {
                font-size: 24px;
            }

            .course-form {
                padding: 22px 16px;
            }

            .form-actions {
                flex-direction: column-reverse;
            }

            .form-actions .btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <main class="dashboard-container">

        <!-- Welcome Section -->
        <section class="welcome-banner">

            <span class="welcome-label">
                ✨ STUDENT DASHBOARD
            </span>

            <h1 class="welcome-title">
                Welcome Back, {{ auth()->user()->name }}!
            </h1>

            <p class="welcome-description">
                Welcome to your student workspace. Manage your courses,
                organize your semester, and keep your academic information
                in one place.
            </p>

            <div class="welcome-info">

                <div class="info-item">
                    <span>👤</span>
                    <span>{{ auth()->user()->name }}</span>
                </div>

                <div class="info-item">
                    <span>📧</span>
                    <span>{{ auth()->user()->email }}</span>
                </div>

                <div class="info-item">
                    <span>📚</span>
                    <span>Course Management</span>
                </div>

            </div>

        </section>

        <!-- Success Message -->
        @if (session('success'))
            <div class="alert alert-success mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Validation Errors -->
        @if ($errors->any())
            <div class="alert alert-danger mb-4">
                <strong>Please correct the following errors:</strong>

                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Independent Full-Width Course Form -->
        <section class="course-form">

            <h2 class="form-heading">
                Register a New Course
            </h2>

            <p class="form-description">
                Enter the information for your course below.
            </p>

            <form method="POST" action="{{ route('courses.store') }}">
                @csrf

                <div class="row g-4">

                    <!-- Left Part: 6 Columns -->
                    <div class="col-12 col-md-6">

                        <div class="mb-4">
                            <label for="course_code" class="form-label">
                                Course Code
                            </label>

                            <input
                                type="text"
                                id="course_code"
                                name="course_code"
                                class="form-control"
                                placeholder="Example: CS101"
                                style='text-transform:uppercase;'
                                value="{{ old('course_code') }}"
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label for="course_name" class="form-label">
                                Course Name
                            </label>

                            <input
                                type="text"
                                id="course_name"
                                name="course_name"
                                class="form-control"
                                placeholder="Enter course name"
                                value="{{ old('course_name') }}"
                                required
                            >
                        </div>

                    </div>

                    <!-- Right Part: 6 Columns -->
                    <div class="col-12 col-md-6">

                        <div class="mb-4">
                            <label for="hours_per_week" class="form-label">
                                Hours Per Week
                            </label>

                            <input
                                type="number"
                                id="hours_per_week"
                                name="hours_per_week"
                                class="form-control"
                                placeholder="Example: 3"
                                value="{{ old('hours_per_week') }}"
                                min="1"
                                max="255"
                                required
                            >
                        </div>

                        <div class="mb-3">
                            <label for="semester" class="form-label">
                                Semester
                            </label>

                            <select
                                id="semester"
                                name="semester"
                                class="form-select"
                                required
                            >
                                <option value="" disabled
                                    {{ old('semester') ? '' : 'selected' }}>
                                    Select semester
                                </option>

                                <option value="Fall"
                                    {{ old('semester') === 'Fall' ? 'selected' : '' }}>
                                    Fall — خزانی
                                </option>

                                <option value="Spring"
                                    {{ old('semester') === 'Spring' ? 'selected' : '' }}>
                                    Spring — بهاری
                                </option>
                            </select>
                        </div>

                    </div>

                </div>

                <!-- Form Buttons -->
                <div class="form-actions">

                    <button type="reset" class="btn btn-clear">
                        Clear Form
                    </button>

                    <button type="submit" class="btn btn-primary">
                        Save Course
                    </button>

                </div>

            </form>

        </section>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
