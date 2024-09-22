
<?php 
include('query.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #74ebd5 0%, #ACB6E5 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-control {
            border-radius: 20px;
        }
        .btn-custom {
            border-radius: 20px;
            background: #6A82FB;
            background: -webkit-linear-gradient(to right, #FC5C7D, #6A82FB);
            background: linear-gradient(to right, #FC5C7D, #6A82FB);
            color: white;
        }
        .btn-custom:hover {
            opacity: 0.8;
        }
        .form-title {
            font-size: 24px;
            font-weight: bold;
            color: #6A82FB;
        }
    </style>
</head>
<body>
    <div class="login-container text-center">
        <h2 class="form-title mb-4">Login</h2>
        <form method="post">
            <div class="mb-3">
                <input type="email" name="gesemail" class="form-control" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <input type="password" name="gespass" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" name="userbtn" class="btn btn-custom w-100">Login</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<?php
if(isset($_POST['userbtn'])){
    $email = $_POST['gesemail'];
    $password = $_POST['gespass'];

}

?>