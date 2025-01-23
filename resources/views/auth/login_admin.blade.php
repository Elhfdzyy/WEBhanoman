<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slide Navbar</title>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    @include('include.style2')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">
        <div class="signup">
            <form action="{{ route('admin.register.post') }}" method="POST">
                @csrf
                <label for="chk" aria-hidden="true">Admin Sign up</label>
                <input type="text" class="@error('name') is-invalid @enderror" name="name" placeholder="Admin name" value="{{ old('name') }}" required>
                <input type="email" class="@error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required>
                <input type="password" class="@error('password') is-invalid @enderror" name="password" placeholder="Password" required>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                <button type="submit">Admin Sign up</button>
            </form>              
        </div>
        <div class="login">
            <form action="{{ route('admin.login.post') }}" method="POST">
                @csrf
                <label for="chk" aria-hidden="true">Admin Login</label>
            
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                <input type="password" name="password" placeholder="Password" required>
            </form>                                       
        </div>
        
    </div>
</body>
</html>

<script>
    // For displaying validation errors
    @if($errors->any())
        Swal.fire({
            icon: 'error',
            title: 'Validation Error',
            html: `{!! implode('<br>', $errors->all()) !!}`,
            confirmButtonColor: '#3085d6'
        });
    @endif

    // For displaying success messages
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ session('success') }}',
            confirmButtonColor: '#3085d6'
        });
    @endif

    // For displaying error messages
    @if(session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '{{ session('error') }}',
            confirmButtonColor: '#3085d6'
        });
    @endif
</script>

