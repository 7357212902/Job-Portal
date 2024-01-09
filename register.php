<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./register.css">
    <link rel="stylesheet" href="./login.php">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>register</title>
</head>
<body>
  <div class="container">
    <form method="POST">
      <div class="mb-3">
        <label for="exampleInputname" class="form-label">full name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="name">
      </div>

      <div class="mb-3">
        <label for="exampleInputnumber" class="form-label">phone number</label> * 
        <input type="number" class="form-control" id="exampleInputnumber" name="phone_no">
      </div>
      <div class="mb-3">
        <label for="exampleInputemail" class="form-label">email address</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <div id="emailhelp" class="form-text">we'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword2" class="form-label"> confirm Password</label>
        <input type="password" class="form-control" id="exampleInputPassword2">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      <br>
      already registered? <a href="login.php">login</a>
    </form>
  </div>
</body>
</html> 
