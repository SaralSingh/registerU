<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>User Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" />
</head>
<body>

<div class="container mt-4">

    {{-- Validation Errors --}}
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                class="form-control @error('name') is-invalid @enderror" 
                value="{{ old('name') }}" 
                required
            >
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input 
                type="email" 
                id="email" 
                name="email" 
                class="form-control @error('email') is-invalid @enderror" 
                value="{{ old('email') }}" 
                required
            >
            <div class="form-text">We'll never share your email with anyone else.</div>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Age</label>
            <input 
                type="number" 
                id="age" 
                name="age" 
                class="form-control @error('age') is-invalid @enderror" 
                value="{{ old('age') }}" 
                required
            >
            @error('age')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">City</label>
            <input 
                type="text" 
                id="city" 
                name="city" 
                class="form-control @error('city') is-invalid @enderror" 
                value="{{ old('city') }}"
            >
            @error('city')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Phone No</label>
            <input 
                type="number" 
                id="pNumber" 
                name="phone_number" 
                class="form-control @error('phone_number') is-invalid @enderror" 
                value="{{ old('phone_number') }}" 
                required
            >
            @error('phone_number')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Profile Image</label>
            <input 
                type="file" 
                id="photo" 
                name="photo" 
                class="form-control @error('photo') is-invalid @enderror"
            >
            @error('photo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
