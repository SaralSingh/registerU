<header>
    <div class="header-content">
        <h1>User Profiles</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/About">About</a>
            <a href="/Contact">Contact</a>
            <a href="/Users">Users</a>
        </nav>
    </div>

    <style>
        /* Header Styles */
        header {
            background: linear-gradient(to right, #2b6cb0, #3182ce);
            color: #fff;
            padding: 1rem 2rem;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            font-size: 1.5rem;
            font-weight: 700;
        }

        nav a {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            color: #e6f1ff;
            text-decoration: none;
            margin-left: 1.5rem;
            font-size: 1rem;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #fff;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header {
                padding: 1rem;
            }

            header h1 {
                font-size: 1.2rem;
            }

            nav a {
                margin-left: 1rem;
                font-size: 0.9rem;
            }
        }
    </style>
</header>