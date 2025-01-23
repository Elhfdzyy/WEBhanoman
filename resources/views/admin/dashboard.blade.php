<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <div class="header d-flex justify-content-between align-items-center">
            <h1>Welcome to the Admin Dashboard</h1>
            <div class="notification-icon position-relative" onclick="openNewReservationsModal()">
                <i class="fas fa-bell"></i>
                <span class="badge bg-danger rounded-pill notification-count"
                    style="position: absolute; top: -8px; right: -8px; font-size: 12px;">{{ $newReservationsCount }}</span>
            </div>
        </div>

        <di class="content-section" id="reservations">
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
                                )" data-bs-toggle="modal" data-bs-target="#editModal" >Edit</button>
                                <button class="button" onclick="handleDelete('{{ $reservation->id }}')">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Reservation</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
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
                        </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>

    <div id="newReservationsModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeNewReservationsModal()">&times;</span>
            <div class="mb-6 notifications-header">
                <h2>Notifications</h2>
            </div>
            <hr>
            <br><br>
            @if ($newReservations->count() > 0)
            @foreach ($newReservations as $reservation)
            <div class="notifications-content">
                <div class="notification">
                    <div class="notification-text">
                        <p><strong>{{ $reservation->name }} dengan email {{ $reservation->email }}</strong> Telah melakukan Reservasi..</p>
                        <hr>
                    </div>
                </div>
            </div>
            @endforeach
            @else
                        <p>No new reservations.</p>
                    @endif
        </div>
    </div>
</body>

</html>
<script>
    // Previous JavaScript code remains the same

    const newReservationsModal = document.getElementById('newReservationsModal');

    function openNewReservationsModal() {
        newReservationsModal.style.display = "block";
    }

    function closeNewReservationsModal() {
    newReservationsModal.style.display = "none";

    // Send an AJAX request to update the notification count
    fetch('/admin/dashboard/get-notification-count') // Replace with your actual route
        .then(response => response.json())
        .then(data => {
            // Update the notification count badge
            document.querySelector('.notification-count').textContent = data.count;
        });
}
    // Close modal when clicking outside
    window.onclick = function(event) {
        if (event.target == newReservationsModal) {
            closeNewReservationsModal();
        }
    }

    function updateNotificationCount() {
    fetch('/admin/dashboard/get-notification-count')
        .then(response => response.json())
        .then(data => {
            document.querySelector('.notification-count').textContent = data.count;
        });
}

setInterval(updateNotificationCount, 5000);
</script>

<script>


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

    function handleDelete(reservationId) {
    if (confirm("Are you sure you want to delete this reservation?")) {
        // Send a DELETE request to the delete route
        fetch(`/admin/dashboard/delete/${reservationId}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => {
            // Handle the response from the server (e.g., reload the page to reflect the deletion)
            alert(data.message); // Assuming the server returns a message
            window.location.reload(); // Reload the page to reflect the deletion
        })
        .catch(error => {
            console.error(error);
            alert("An error occurred while deleting the reservation.");
        });
    }
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
