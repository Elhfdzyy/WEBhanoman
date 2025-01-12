<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff5e1;
            /* Warna latar belakang kuning muda */
            margin: 0;
            padding: 0;
        }

        .sidebar {
            height: 100vh;
            width: 250px;
            background-color: #fdb813;
            /* Warna kuning tua untuk sidebar */
            color: #fff;
            padding-top: 20px;
            position: fixed;
        }

        .sidebar a {
            display: block;
            padding: 15px;
            color: #fff;
            text-decoration: none;
            font-size: 18px;
        }

        .sidebar a:hover {
            background-color: #f8a400;
            /* Warna hover yang lebih gelap */
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .header {
            background-color: #fdb813;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
            font-size: 24px;
        }

        .content-section {
            margin-top: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table,
        .table th,
        .table td {
            border: 1px solid #ddd;
        }

        .table th,
        .table td {
            padding: 10px;
            text-align: left;
        }

        .table th {
            background-color: #f8a400;
            /* Warna header tabel */
            color: #fff;
        }

        .button {
            background-color: #fdb813;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #f8a400;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-group button {
            width: 100%;
            background-color: #fdb813;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
        }

        .form-group button:hover {
            background-color: #f8a400;
        }
    </style>

    <style>
        /* Modal styling */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fff;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #ddd;
            width: 70%;
            max-width: 600px;
            border-radius: 8px;
            position: relative;
        }

        .close {
            position: absolute;
            right: 20px;
            top: 10px;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            color: #666;
        }

        .close:hover {
            color: #000;
        }

        .modal-form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 20px;
        }

        .modal-form input,
        .modal-form textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .modal-form textarea {
            height: 100px;
            resize: vertical;
        }

        .modal-form label {
            font-weight: bold;
            color: #333;
        }

        .modal-form button {
            background-color: #fdb813;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
        }

        .modal-form button:hover {
            background-color: #f8a400;
        }
    </style>


</head>

<body>

    <div class="sidebar">
        <h2 style="color: #fff; text-align: center;">Admin Dashboard</h2>
        <a href="#stocks">Stok Barang</a>
        <a href="#menu">Stok Menu</a>
        <a href="#reservations">Data Reservasi</a>
    </div>

    <div class="main-content">
        {{-- <div class="header">
        <h1>Welcome to the Admin Dashboard</h1>
    </div>

    <div class="content-section" id="stocks">
        <h2>Manage Stok Barang</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Item 1</td>
                    <td>100</td>
                    <td>$10.00</td>
                    <td><button class="button">Edit</button> <button class="button">Delete</button></td>
                </tr>
                <tr>
                    <td>Item 2</td>
                    <td>50</td>
                    <td>$5.00</td>
                    <td><button class="button">Edit</button> <button class="button">Delete</button></td>
                </tr>
            </tbody>
        </table>
        <div class="form-group">
            <h3>Add New Item</h3>
            <label for="item-name">Item Name</label>
            <input type="text" id="item-name" placeholder="Enter item name">
            <label for="item-quantity">Quantity</label>
            <input type="number" id="item-quantity" placeholder="Enter quantity">
            <label for="item-price">Price</label>
            <input type="number" id="item-price" placeholder="Enter price">
            <button type="submit" class="form-group button">Add Item</button>
        </div>
    </div>

    <div class="content-section" id="menu">
        <h2>Manage Stok Menu</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Menu Name</th>
                    <th>Quantity Available</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Menu Item 1</td>
                    <td>30</td>
                    <td>$20.00</td>
                    <td><button class="button">Edit</button> <button class="button">Delete</button></td>
                </tr>
                <tr>
                    <td>Menu Item 2</td>
                    <td>40</td>
                    <td>$15.00</td>
                    <td><button class="button">Edit</button> <button class="button">Delete</button></td>
                </tr>
            </tbody>
        </table>
        <div class="form-group">
            <h3>Add New Menu Item</h3>
            <label for="menu-name">Menu Name</label>
            <input type="text" id="menu-name" placeholder="Enter menu name">
            <label for="menu-quantity">Quantity Available</label>
            <input type="number" id="menu-quantity" placeholder="Enter quantity">
            <label for="menu-price">Price</label>
            <input type="number" id="menu-price" placeholder="Enter price">
            <button type="submit" class="form-group button">Add Menu Item</button>
        </div>
    </div> --}}

        <div class="content-section" id="reservations">
            <h2>Manage Reservations</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Guests</th>
                        <th>Message</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservations as $reservation)
                        <tr>
                            <td>{{ $reservation->id }}</td>
                            <td>{{ $reservation->name }}</td>
                            <td>{{ $reservation->email }}</td>
                            <td>{{ $reservation->phone }}</td>
                            <td>{{ $reservation->reservation_date }}</td>
                            <td>{{ date('H:i', strtotime($reservation->reservation_time)) }}</td>
                            <td>{{ $reservation->guests }}</td>
                            <td>{{ $reservation->message }}</td>
                            <td>
                                <button class="button"
                                    onclick="openModal(
                            '{{ $reservation->id }}',
                            '{{ $reservation->name }}',
                            '{{ $reservation->email }}',
                            '{{ $reservation->phone }}',
                            '{{ $reservation->reservation_date }}',
                            '{{ date('H:i', strtotime($reservation->reservation_time)) }}',
                            '{{ $reservation->guests }}',
                            '{{ $reservation->message }}'
                        )">Edit</button>
                                <button class="button">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
<!-- Modal Edit -->
<div id="editModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2 class="mb-4">Edit Reservation</h2>
        <form id="updateForm" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="reservation-id">Reservation ID</label>
                        <input type="text" id="reservation-id" name="id" readonly class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label for="reservation-name">Name</label>
                        <input type="text" id="reservation-name" name="name" class="form-control" required maxlength="255">
                    </div>
                    
                    <div class="mb-3">
                        <label for="reservation-email">Email</label>
                        <input type="email" id="reservation-email" name="email" class="form-control" required maxlength="255">
                    </div>
                    
                    <div class="mb-3">
                        <label for="reservation-phone">Phone</label>
                        <input type="text" id="reservation-phone" name="phone" class="form-control" required maxlength="255">
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="reservation-date">Reservation Date</label>
                        <input type="date" id="reservation-date" name="reservation_date" class="form-control" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="reservation-time">Reservation Time</label>
                        <input type="time" id="reservation-time" name="reservation_time" class="form-control" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="reservation-guests">Number of Guests</label>
                        <input type="number" id="reservation-guests" name="guests" class="form-control" required min="1">
                    </div>
                    
                    <div class="mb-3">
                        <label for="reservation-message">Message</label>
                        <textarea id="reservation-message" name="message" class="form-control" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary w-100">Save Changes</button>
            </div>
        </form>
    </div>
</div>
            {{-- END MODAL EDIT --}}

            {{-- <div class="form-group">
            <h3>Edit Reservation</h3>
            <label for="reservation-id">Reservation ID</label>
            <input type="text" id="reservation-id" placeholder="Enter reservation ID">
            <label for="reservation-name">Name</label>
            <input type="text" id="reservation-name" placeholder="Enter customer name">
            <label for="reservation-date">Reservation Date</label>
            <input type="date" id="reservation-date">
            <label for="reservation-time">Reservation Time</label>
            <input type="time" id="reservation-time">
            <label for="reservation-guests">Number of Guests</label>
            <input type="number" id="reservation-guests">
            <button type="submit" class="form-group button">Update Reservation</button>
        </div> --}}
        </div>
    </div>

</body>

</html>

<script>
    // Get the modal
    const modal = document.getElementById('editModal');

    // Function to open modal
    function openModal(id, name, email, phone, date, time, guests, message) {
        modal.style.display = "block";
        document.getElementById('reservation-id').value = id;
        document.getElementById('reservation-name').value = name;
        document.getElementById('reservation-email').value = email;
        document.getElementById('reservation-phone').value = phone;
        document.getElementById('reservation-date').value = date;
        document.getElementById('reservation-time').value = time;
        document.getElementById('reservation-guests').value = guests;
        document.getElementById('reservation-message').value = message;
    }

    // Function to close modal
    function closeModal() {
        modal.style.display = "none";
    }

    // Close modal when clicking outside
    window.onclick = function(event) {
        if (event.target == modal) {
            closeModal();
        }
    }

    const modal = document.getElementById('editModal');
    const updateForm = document.getElementById('updateForm');

    function openModal(id, name, email, phone, date, time, guests, message) {
        modal.style.display = "block";
        
        // Set form action dengan route yang benar
        updateForm.action = `/admin/dashboard/update/${id}`;
        
        // Set form values sesuai dengan struktur tabel
        document.getElementById('reservation-id').value = id;
        document.getElementById('reservation-name').value = name;
        document.getElementById('reservation-email').value = email;
        document.getElementById('reservation-phone').value = phone;
        document.getElementById('reservation-date').value = date;
        document.getElementById('reservation-time').value = time;
        document.getElementById('reservation-guests').value = guests;
        document.getElementById('reservation-message').value = message || '';
    }

    function closeModal() {
        modal.style.display = "none";
    }

    // Close modal when clicking outside
    window.onclick = function(event) {
        if (event.target == modal) {
            closeModal();
        }
    }

    // Handling success/error messages
    @if(session('success'))
        alert("{{ session('success') }}");
    @endif

    @if(session('error'))
        alert("{{ session('error') }}");
    @endif
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
