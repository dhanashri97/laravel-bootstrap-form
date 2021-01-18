<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <form action="submit" method="post">
      @csrf
      <div class="container">
        <div class="row mt-4">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <h1>Customer page</h1>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="exampleInputFname">First Name</label>
                <input type="firstname" class="form-control" id="exampleInputFname" name="first-name" placeholder="Enter First Name">
              </div>
              <div class="form-group col-md-6">
                <label for="exampleInputLname">Last Name</label>
                <input type="lastname" class="form-control" id="exampleInputLname" name="last-name"  placeholder="Enter last Name">
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputMobile">Mobile Number</label>
              <input type="mobileno" class="form-control" id="exampleInputMobile" name="mobile-number" placeholder="Enter Mobile Number">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
   </form>
      <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>




