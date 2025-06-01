<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f8;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .header-section {
            background-color: #0d6efd;
            color: white;
            padding: 1.2rem;
            text-align: center;
            border-radius: 12px;
            margin-top: 20px;
        }
        .user-card {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 1rem;
            background-color: #fff;
            transition: transform 0.2s;
            margin-bottom: 1.5rem;
        }
        .user-card:hover {
            transform: scale(1.01);
        }
        .user-img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid #0d6efd;
        }
        .user-name {
            font-size: 1.1rem;
            font-weight: 600;
        }
        .user-email {
            color: #666;
            font-size: 0.95rem;
        }
        .btn-details {
            font-size: 0.9rem;
            border-radius: 6px;
        }
        .top-bar {
            margin-top: 20px;
            margin-bottom: 10px;
            text-align: right;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="top-bar">
        <a href="{{ route('user.create') }}" class="btn btn-primary">+ Register New User</a>
    </div>

    <div class="header-section mb-4">
        <h2>All Users Records</h2>
    </div>

    <div class="row">
        @forelse ($users as $user)
        <div class="col-12 col-sm-6 col-lg-4">
            <div class="user-card d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img src="{{ ($user->photo && file_exists(public_path('storage/' . $user->photo))) ? asset('storage/' . $user->photo) : asset('images/profiles/default.png') }}" 
                         alt="User Photo" 
                         class="user-img me-3">
                    <div>
                        <div class="user-name">{{ $user->name }}</div>
                        <div class="user-email">{{ $user->email }}</div>
                    </div>
                </div>
                <a href="{{ route('user', ['id' => $user->id]) }}" class="btn btn-info btn-details">Details</a>
            </div>
        </div>
        @empty
        <div class="col-12 text-center">
            <p>No users found.</p>
        </div>
        @endforelse
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $users->links() }}
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
