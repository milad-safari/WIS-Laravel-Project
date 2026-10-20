
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Student Authentication')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --text: #1e293b;
            --muted: #64748b;
            --border: #e2e8f0;
        }

        body {
            font-family: 'Inter', Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
            color: var(--text);
            background:
                radial-gradient(ellipse at top left, #dbeafe 0%, transparent 45%),
                radial-gradient(ellipse at bottom right, #ede9fe 0%, transparent 45%),
                #f8fafc;
            overflow-x: hidden;
        }

        body::before,
        body::after {
            content: "";
            position: fixed;
            width: 280px;
            height: 280px;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.45;
            z-index: -1;
            pointer-events: none;
        }

        body::before {
            background: #818cf8;
            top: -100px;
            right: -70px;
        }

        body::after {
            background: #67e8f9;
            bottom: -100px;
            left: -70px;
        }

        .container {
            width: 100%;
            max-width: 460px;
            margin: auto;
            padding: 40px;
            background: rgba(255, 255, 255, 0.88);
            border: 1px solid rgba(255, 255, 255, 0.9);
            border-radius: 24px;
            box-shadow:
                0 25px 60px rgba(30, 41, 59, 0.09),
                0 4px 12px rgba(30, 41, 59, 0.03);
            backdrop-filter: blur(16px);
            animation: appear 0.65s ease both;
        }

        .brand {
            text-align: center;
            margin-bottom: 30px;
        }

        .brand-icon {
            width: 62px;
            height: 62px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 18px;
            border-radius: 20px;
            color: white;
            font-size: 28px;
            font-weight: 800;
            background: linear-gradient(135deg, #818cf8, #4f46e5);
            box-shadow: 0 10px 25px rgba(99, 102, 241, 0.3);
        }

        .brand h1 {
            font-size: 27px;
            font-weight: 800;
            letter-spacing: -1px;
            margin-bottom: 9px;
        }

        .brand p {
            color: var(--muted);
            font-size: 14px;
            line-height: 1.7;
        }

        h2, h3 {
            color: var(--text);
        }

        label {
            display: block;
            margin-top: 21px;
            margin-bottom: 9px;
            font-size: 13px;
            font-weight: 600;
            color: #334155;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 14px 15px;
            font-family: inherit;
            font-size: 14px;
            color: var(--text);
            background: #f8fafc;
            border: 1px solid var(--border);
            border-radius: 12px;
            outline: none;
            transition: border-color 0.25s, box-shadow 0.25s, background 0.25s;
        }

        input::placeholder,
        textarea::placeholder {
            color: #94a3b8;
        }

        input:focus,
        select:focus,
        textarea:focus {
            background: white;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.12);
        }

        input[type="checkbox"],
        input[type="radio"] {
            width: auto;
        }

        button,
        input[type="submit"] {
            width: 100%;
            padding: 15px;
            margin-top: 25px;
            border: none;
            border-radius: 12px;
            background: linear-gradient(135deg, #6366f1, #4f46e5);
            color: white;
            font-family: inherit;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            box-shadow: 0 8px 18px rgba(99, 102, 241, 0.22);
            transition: transform 0.25s, box-shadow 0.25s;
        }

        button:hover,
        input[type="submit"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 24px rgba(99, 102, 241, 0.32);
        }

        button:active,
        input[type="submit"]:active {
            transform: translateY(0);
        }

        a {
            color: var(--primary-dark);
            font-weight: 600;
            text-decoration: none;
            transition: color 0.2s;
        }

        a:hover {
            color: #3730a3;
            text-decoration: underline;
        }

        .errors,
        .success {
            padding: 15px 17px;
            margin-bottom: 20px;
            border-radius: 12px;
            font-size: 13px;
            line-height: 1.8;
        }

        .errors {
            color: #b91c1c;
            background: #fef2f2;
            border: 1px solid #fecaca;
        }

        .errors ul {
            padding-left: 20px;
        }

        .success {
            color: #166534;
            background: #f0fdf4;
            border: 1px solid #bbf7d0;
        }

        .auth-footer {
            margin-top: 26px;
            padding-top: 22px;
            border-top: 1px solid #eef2f7;
            text-align: center;
            font-size: 13px;
            color: var(--muted);
            line-height: 1.8;
        }

        @keyframes appear {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 520px) {
            body {
                padding: 22px 14px;
            }

            .container {
                padding: 28px 22px;
                border-radius: 20px;
            }

            .brand h1 {
                font-size: 24px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                animation-duration: 0.01ms !important;
                transition-duration: 0.01ms !important;
            }
        }
    </style>
</head>

<body>
    <main class="container">

        <header class="brand">
            <div class="brand-icon">S</div>
            <h1>Welcome to Student Portal</h1>
            <p>Your learning journey starts here. Sign in or create an account.</p>
        </header>

        @if (session('success'))
            <div class="success" role="status">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="errors" role="alert">
                <strong>Please check the following:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')

        <footer class="auth-footer">
            Secure student authentication
            <br>
            &copy; {{ date('Y') }} Student Portal. All rights reserved.
        </footer>

    </main>
</body>
</html>
