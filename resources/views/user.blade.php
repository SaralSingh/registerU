<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>User Profile</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"/>
  <style>
    body {
      background-color: #f2f2f2;
      font-family: 'Segoe UI', sans-serif;
    }

    .profile-card {
      max-width: 750px;
      margin: 3rem auto;
      border-radius: 16px;
      background-color: #fff;
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
      overflow: hidden;
    }

    .profile-header {
      background-color: #e0ebff;
      padding: 2rem;
      text-align: center;
    }

    .profile-header h2 {
      font-size: 1.8rem;
      font-weight: 600;
      margin: 0;
      color: #1a1a1a;
    }

    .user-img {
      width: 130px;
      height: 130px;
      border-radius: 50%;
      object-fit: cover;
      margin: -65px auto 1.5rem;
      display: block;
      border: 4px solid #fff;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .info-section {
      padding: 2rem;
    }

    .info-label {
      font-weight: 500;
      color: #555;
      display: block;
    }

    .info-value {
      font-size: 1rem;
      color: #222;
      margin-bottom: 1rem;
      display: block;
    }

    .additional-info {
      background-color: #f8f9fa;
      padding: 1.25rem;
      border-radius: 12px;
      margin-top: 1.5rem;
    }

    .additional-info h5 {
      font-size: 1rem;
      margin-bottom: 0.75rem;
      color: #333;
    }

    .additional-info p {
      font-size: 0.95rem;
      color: #444;
    }

    .btn-primary {
      background-color: #0077cc;
      border: none;
      padding: 0.7rem 1.5rem;
      border-radius: 10px;
      font-weight: 500;
      font-size: 0.95rem;
      transition: background 0.3s ease, transform 0.2s ease;
    }

    .btn-primary:hover {
      background-color: #005fa3;
      transform: translateY(-2px);
    }

    @media (max-width: 576px) {
      .info-label, .info-value {
        font-size: 0.9rem;
      }

      .profile-card {
        margin: 1.5rem 1rem;
      }

      .info-section {
        padding: 1.2rem;
      }

      .btn-primary {
        width: 100%;
        padding: 0.6rem;
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="profile-card">
      <div class="profile-header">
        <h2>User Profile</h2><br><br>
      </div>
      <img src="{{ ($user->photo && file_exists(public_path('storage/' . $user->photo))) ? asset('storage/' . $user->photo) : asset('images/profiles/default.png') }}"
           alt="User Photo"
           class="user-img"
           loading="lazy">
      <div class="info-section">
        <div class="row">
          <div class="col-sm-6">
            <span class="info-label">ID:</span>
            <span class="info-value">{{ $user->id }}</span>
          </div>
          <div class="col-sm-6">
            <span class="info-label">Name:</span>
            <span class="info-value">{{ $user->name }}</span>
          </div>
          <div class="col-sm-6">
            <span class="info-label">Email:</span>
            <span class="info-value">{{ $user->email }}</span>
          </div>
          <div class="col-sm-6">
            <span class="info-label">Age:</span>
            <span class="info-value">{{ $user->age }}</span>
          </div>
          <div class="col-sm-6">
            <span class="info-label">City:</span>
            <span class="info-value">{{ $user->city }}</span>
          </div>
          <div class="col-sm-6">
            <span class="info-label">Phone No:</span>
            <span class="info-value">{{ $user->phone_no }}</span>
          </div>
        </div>

        <div class="additional-info mt-4">
          <h5>Additional Information</h5>
          @if ($information)
            <p>{{ $information->info }}</p>
          @else
            <p><em>No additional information available.</em></p>
          @endif
        </div>

        <div class="text-center mt-4">
          <a class="btn btn-primary" href="{{ route('users') }}">Back to Home</a>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
