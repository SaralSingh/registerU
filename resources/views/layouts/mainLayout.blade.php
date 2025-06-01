<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'User Profiles')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: linear-gradient(135deg, #f0f4ff 0%, #d9e2ff 100%);
            color: #1a202c;
        }

        /* Main Content Styles */
        main {
            flex: 1;
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .columns-container {
            display: flex;
            gap: 1.5rem;
            width: 100%;
        }

        /* Column 1: Info (30% width) */
        .column-info {
            width: 30%;
            background: #fff;
            border-radius: 12px;
            padding: 1.5rem;
            min-height: 350px;
            max-height: 350px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
        }

        .column-info:hover {
            transform: translateY(-5px);
        }

        .column-info h2 {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #2d3748;
        }

        .column-info p {
            font-size: 1rem;
            line-height: 1.6;
            color: #4a5568;
            flex-grow: 1;
        }

        /* Column 2: Content (70% width) */
        .column-details {
            width: 70%;
            background: #fff;
            border-radius: 12px;
            padding: 1.5rem;
            min-height: 350px;
            max-height: 350px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
        }

        .column-details:hover {
            transform: translateY(-5px);
        }

        .column-details h2 {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #2d3748;
        }

        .column-details p {
            font-size: 1rem;
            line-height: 1.6;
            color: #4a5568;
            flex-grow: 1;
        }

        /* Placeholder for empty sections */
        .column-info:empty::after,
        .column-details:empty::after {
            content: "No content available";
            font-size: 1rem;
            color: #a0aec0;
            text-align: center;
            flex-grow: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Footer Styles */
        footer {
            background: #2d3748;
            color: #e2e8f0;
            padding: 1.5rem;
            text-align: center;
            margin-top: auto;
        }

        footer p {
            font-size: 0.9rem;
        }

        footer a {
            color: #90cdf4;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: #fff;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            main {
                margin: 1rem auto;
                padding: 0 0.5rem;
            }

            .columns-container {
                flex-direction: column;
                gap: 1rem;
            }

            .column-info,
            .column-details {
                width: 100%;
                min-height: 250px;
                max-height: none;
            }

            .column-info:empty::after,
            .column-details:empty::after {
                min-height: 250px;
            }

            .column-info h2,
            .column-details h2 {
                font-size: 1.2rem;
            }

            .column-info p,
            .column-details p {
                font-size: 0.95rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    @include('layouts.header')

    <!-- Main Content -->
    <main>
        <div class="columns-container">
            <section class="column-info">
                @yield('info', 'No info available')
            </section>
            <section class="column-details">
                @yield('content', 'Not Found!')
            </section>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <p>© 2025 User Profiles. All rights reserved. | <a href="#privacy">Privacy Policy</a></p>
    </footer>
</body>
</html>