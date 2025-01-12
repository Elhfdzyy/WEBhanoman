
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
            <form action="{{ route('register.store') }}" method="POST">
                @csrf
                <label for="chk" aria-hidden="true">Sign up</label>
                <input type="text" name="name" id="username" placeholder="Username" required="">
                <input type="email" name="email" id="email" placeholder="Email" required="">
                <input type="number" name="hp" id="hp" placeholder="hp" required="">
                <input type="password" name="pswd" placeholder="Password" required="">
                <button type="submit">Sign up</button>
                
            </form>
        </div>
        <div class="login">
            <form>
                <label for="chk" aria-hidden="true">Login</label>
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="pswd" placeholder="Password" required="">
                <button>Login</button>
            </form>
        </div>
    </div>
</body>
</html>
