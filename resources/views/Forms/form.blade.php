
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Form</title>
    @include('include.style1')
</head>
<body>


    <form class="reservation-form" action="{{ route('reservasi.submit') }}" method="POST">
        @csrf
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <h2>Book a Table</h2>
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
        </div>
        <div class="form-group">
            <label for="date">Reservation Date</label>
            <input type="date" id="date" name="date" required>
        </div>
        <div class="form-group">
            <label for="time">Reservation Time</label>
            <input type="time" id="time" name="time" required>
        </div>
        <div class="form-group">
            <label for="guests">Number of Guests</label>
            <select id="guests" name="guests" required>
                <option value="">Select number of guests</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>
        <div class="form-group">
            <label for="message">Additional Notes</label>
            <textarea id="message" name="message" rows="4" placeholder="Enter any special requests or notes"></textarea>
        </div>
        <button type="submit">Book a Table</button>
    </form>
</body>

</html>
