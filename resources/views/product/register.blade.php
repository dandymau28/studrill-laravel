<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f8f9fa;
    }
    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      background-color: #fff;
    }
    .card-header {
      background-color: #efcb27; /* Base Color */
      border-radius: 15px 15px 0 0;
      text-align: center;
      padding: 20px 0;
      font-size: 24px;
      color: #333;
    }
    .form-group {
      position: relative;
    }
    .form-control {
      border: 1px solid #ced4da;
      border-radius: 10px;
      margin-bottom: 20px;
      transition: all 0.3s ease;
      padding: 15px;
    }
    .form-control:focus {
      border-color: #efcb27;
      box-shadow: 0 0 0 0.2rem rgba(239, 203, 39, 0.25);
    }
    .floating-label {
      position: absolute;
      pointer-events: none;
      top: 50%;
      left: 20px;
      transform: translateY(-50%);
      transition: all 0.3s ease;
      opacity: 0.5;
      color: #6c757d;
    }
    .form-control:focus + .floating-label,
    .form-control:not(:placeholder-shown) + .floating-label {
      transform: translateY(-110%) scale(0.8);
      font-size: 12px;
      color: #6c757d;
      opacity: 1;
    }
    .btn-primary {
      background-color: #efcb27; /* Base Color */
      border: none;
      border-radius: 10px;
      padding: 10px 20px;
      font-size: 18px;
      font-weight: bold;
      letter-spacing: 1px;
      transition: all 0.3s ease;
      color: #333;
    }
    .btn-primary:hover {
      background-color: #d4b21d;
      transform: translateY(-2px);
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>

<div class="container mt-5">
@if (session('failed'))
    <div class="alert alert-danger" role="alert">
        {{ session('failed') }}
    </div>
@endif
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3>Register</h3>
        </div>
        <div class="card-body">
          <form action="{{ route('register.post') }}" method="POST">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" id="name" name="name" placeholder=" ">
              <label for="name" class="floating-label">Name</label>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="username" name="username" placeholder=" ">
              <label for="username" class="floating-label">Username</label>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="password" name="password" placeholder=" ">
              <label for="password" class="floating-label">Password</label>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder=" ">
              <label for="confirm_password" class="floating-label">Confirm Password</label>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="email" name="email" placeholder=" ">
              <label for="email" class="floating-label">Email</label>
            </div>
            <div class="form-group">
              <input type="tel" class="form-control" id="phone" name="phone" placeholder=" ">
              <label for="phone" class="floating-label">Phone</label>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="birthplace" name="birthplace" placeholder=" ">
              <label for="birthplace" class="floating-label">Birthplace</label>
            </div>
            <div class="form-group">
              <input type="date" class="form-control" id="birthdate" name="birthdate" placeholder=" ">
              <label for="birthdate" class="floating-label">Birthdate</label>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="institution" name="institution" placeholder=" ">
              <label for="institution" class="floating-label">Institution</label>
            </div>
            <div class="form-group">
              <textarea class="form-control" id="address" rows="3" name="address" placeholder=" "></textarea>
              <label for="address" class="floating-label">Address</label>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
