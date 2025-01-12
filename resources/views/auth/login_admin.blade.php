<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slide Navbar</title>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    @include('include.style2')
</head>
<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">
        <div class="signup">
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('admin.register.post') }}" method="POST">
                @csrf
                <label for="chk" aria-hidden="true">Admin Sign up</label>
                <input type="text" class="@error('name') is-invalid @enderror" name="name" placeholder="Admin name" value="{{ old('name') }}" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            
                <input type="email" class="@error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            
                <input type="password" class="@error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            
                <button type="submit">Admin Sign up</button>
            </form>              
        </div>
        <div class="login">
            <form action="{{ route('admin.login.post') }}" method="POST">
                @csrf
                <label for="chk" aria-hidden="true">Admin Login</label>
            
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            
                <input type="password" name="password" placeholder="Password" required>
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            
                <button type="submit">Admin Login</button>
            </form>                                       
        </div>
        
    </div>
</body>
</html>

