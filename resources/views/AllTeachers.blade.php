<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Data</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <!-- Heading -->
    <h1 class=""><h1 class=" text-center mb-4 text-primary">All Teacher Data</h1></h1>
    <div class="row">
        <div class="col-12">
           <a href="{{ route('Addteacher') }}" class="btn btn-sm btn-primary mb-3">Insert Data</a>
        </div>
    </div>

    <!-- User Data Table -->
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>City</th>
            <th>View</th>
            <th>Update</th>
            <th>Delete</th>

          </tr>
        </thead>
        <tbody>
          <!-- Example Data -->
@foreach ($data as $id=>$res )
    


          <tr>
            <td>{{$res->id}}</td>
            <td>{{$res->name}}</td>
            <td>{{$res->email}}</td>
            <td>{{$res->age}}</td>
            <td>{{$res->city}}</td>
            <td><a href="{{route('SingleReadTeacher',$res->id)}}" class="btn bt-sm btn-success">View</a></td>
            <td><a href="{{route('formpopulae',$res->id)}}" class="btn bt-sm btn-secondary">Update</a></td>
            <td><a href="{{route('del',$res->id)}}" class="btn bt-sm btn-danger">Delete</a></td>
          </tr>

          @endforeach
    
        </tbody>
      </table>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
