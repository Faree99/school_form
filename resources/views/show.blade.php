<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="container-fluid row justify-content-center bg-primary-subtle">
    <div class="col-6 mt-5">

        <h1>Student Details</h1>

        @foreach( $students  as   $index=>$student )

        <ul>
         <li>First Name: {{$student->first_name }}</li>
         <li>Last Name: {{$student->last_name }}</li>
         <li>Email: {{$student->email }}</li>
         <li>Date of Birth: {{   date('d/M/Y', strtotime($student->dob))   }}</li>
         <li>Class: {{$student->class }}</li>
         <li>Duration: {{$student->duration }}</li>
         <li>Certificate ID: {{$student->certificate_id }}</li>
    </ul>

    @endforeach

    {{-- @foreach($students as $student)
    {{$student['first_name']}}
    @endforeach --}}

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
