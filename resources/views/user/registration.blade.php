<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
  body{
      font-family: Arial, Helvetica, sans-serif;
  }
  {
      box-sizing: border-box;
  }
  .registerbtn:hover{
      opacity: 1;
  }
  .container {
  padding: 10px;
  border-radius: 5px;
  background-color: #CEF6F5;
  background-color: white;

}
  .signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
<body>
    <div class="container">
        <h1>Registration Form</h1>
        <p>Please fill in this form to create an account</p>
        <hr>
        <form>
            <div class="form-group">
              <label for="name">Enter your name</label>
              <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter your name Here" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
              </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Repeat Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
              </div>
              <hr>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1"><p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p></label>
            </div>
            <button type="submit" class="btn btn-primary registerbtn"><a href="/"></a>Register</button> 

            <div class="container signin">
                <p>Already have an account? <a href="{{url('donorlogin')}}">Sign in</a>.</p>
              </div>
          </form>
    </div>
</body>
</html>

