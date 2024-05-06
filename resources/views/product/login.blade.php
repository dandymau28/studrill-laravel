<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Educational Website Login</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f5f5f5; /* Light Grey */
    }
    .card {
      border: none;
      border-radius: 15px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      background-color: #fff; /* White */
    }
    .card-header {
      background-color: #feca57; /* Bright Yellow */
      border-radius: 15px 15px 0 0;
      text-align: center;
      padding: 20px 0;
      font-size: 24px;
      color: #333; /* Dark Grey */
    }
    .form-group {
      position: relative;
    }
    .form-control {
      border: 1px solid #ccc; /* Light Grey */
      border-radius: 10px;
      margin-bottom: 20px;
      transition: border-color 0.3s;
      padding: 15px;
      color: #333; /* Dark Grey */
      background-color: #fff; /* White */
    }
    .form-control:focus {
      border-color: #feca57; /* Bright Yellow */
      box-shadow: 0 0 0 0.2rem rgba(254, 202, 87, 0.25); /* Bright Yellow Shadow */
    }
    .floating-label {
      position: absolute;
      pointer-events: none;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      transition: all 0.3s ease;
      opacity: 0.5;
      color: #555; /* Grey */
    }
    .form-control:focus + .floating-label,
    .form-control:not(:placeholder-shown) + .floating-label {
      transform: translate(-50%, -110%) scale(0.8);
      font-size: 12px;
      color: #555; /* Grey */
      opacity: 1;
    }
    .btn-primary {
      background-color: #feca57; /* Bright Yellow */
      border: none;
      border-radius: 10px;
      padding: 10px 20px;
      font-size: 18px;
      font-weight: bold;
      letter-spacing: 1px;
      transition: all 0.3s ease;
      color: #333; /* Dark Grey */
    }
    .btn-primary:hover {
      background-color: #f0b531; /* Darker Yellow */
      transform: translateY(-2px);
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h3>Studrill Login</h3>
        </div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <input type="text" class="form-control" id="username" placeholder=" ">
              <label for="username" class="floating-label">Username</label>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="password" placeholder=" ">
              <label for="password" class="floating-label">Password</label>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
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
