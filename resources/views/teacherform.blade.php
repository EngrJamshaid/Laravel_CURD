<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-12"><h1 class="text-success mb-3 border-2 border-rounded">Teacher Data</h1></div>
    </div>


    <div class="row">
        <div class="col-8">

<form action="{{route('insertTeacherintoTable')}}" method="post">
    @csrf
<div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text"  name="teachername" class="form-control" id="name" placeholder="Enter your name">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email"  name="teacheremail"  class="form-control" id="email" placeholder="Enter your email">
      </div>
      <div class="mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" name="teacherage"  class="form-control" id="age" placeholder="Enter your age">
      </div>
      <div class="mb-3">
        <label for="city" class="form-label">City</label>
        <input type="text" name="teachercity"  class="form-control" id="city" placeholder="Enter your city">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
</form>

        </div>
    </div>
</div>


</body>
</html>