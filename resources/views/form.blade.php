<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Registration Form</title>
</head>
<body class="container-fluid row justify-content-center bg-secondary">

    <div class="col-6 mt-5 bg-secondary-subtle pt-3">

        @if (session()->has('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

        <h3 class="text-primary text-center">HILLCITY REGISTRATION FORM</h3>

    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
    <form  method="post"  action="{{ route('store')}}"  >
        @csrf

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">First Name</span>
        <input type="text" name="first_name" class="form-control" placeholder="Enter your first name" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Last Name</span>
        <input type="text" name="last_name" class="form-control" placeholder="Enter your last name" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Email</span>
        <input type="text" name="email" class="form-control" placeholder="Enter email" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Date of Birth </span>
        <input type="date" name="dob" class="form-control" placeholder="Enter date of birth" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Class</span>
        <input type="text" name="class" class="form-control" placeholder="Enter your class" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Duration</span>
        <input type="text" name="duration" class="form-control" placeholder="Enter duration" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Certificate ID</span>
        <input type="text" name="certificate_id" class="form-control" placeholder="Enter your certificate ID" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <button class="btn btn-primary" name="submit">Submit</button>




</form>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
