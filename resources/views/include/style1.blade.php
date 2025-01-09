<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #121212;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        color: #ffffff;
    }
    .reservation-form {
        background: #1e1e1e;
        border-radius: 10px;
        padding: 20px 30px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
        max-width: 600px;
        width: 100%;
    }
    .reservation-form h2 {
        margin-bottom: 20px;
        color: #ffc107;
        text-align: center;
    }
    .reservation-form .form-group {
        margin-bottom: 15px;
    }
    .reservation-form label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }
    .reservation-form input,
    .reservation-form select,
    .reservation-form textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #333;
        border-radius: 5px;
        font-size: 14px;
        background-color: #222;
        color: #fff;
    }
    .reservation-form input::placeholder,
    .reservation-form textarea::placeholder {
        color: #aaa;
    }
    .reservation-form button {
        background-color: #ffc107;
        color: black;
        padding: 10px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        width: 100%;
    }
    .reservation-form button:hover {
        background-color: #e0a800;
    }
    .error-message {
        background-color: #dc3545;
        color: #ffffff;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 15px;
        text-align: center;
    }
</style>