<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZIMO-CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="/">ZIMO GROUP</a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/">Students</a>
    </li>   
  </ul>
</nav>

<div class="container-fluid">
    <div class='text-right'>    
        <a href='/students/create' class='btn btn-dark mt-2'>New Student</a>
</div>
  <h2>Student Details</h2>

  <div>
  <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>Sr. No</th>
                    <th>Student Name</th>
                    <th>Department</th>
                    <th>Age</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class='text-white'>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->department }}</td>
                        <td>{{ $student->age }}</td>
                        <td class='btn btn-light my-2'>                           
                            Edit                          
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
  </div>
</div>
</body>
</html>