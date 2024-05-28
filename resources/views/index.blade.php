<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body class="container-fluid row justify-content-center bg-primary-subtle">
    <div class="col-6 mt-5">

  <a href="{{route('create')}}"   class="btn btn-primary btn-lg" >  Add New Student </a>
  <br>

        <h2> Student Lists </h2>

        <hr>

         <table  class="table table-bordered table-striped">
           <tr>
               <th>S/N</th>
               <th> First Name </th>
               <th> Last Name</th>
               <th> Email</th>
               <th> Date of Birth</th>
               <th> Class</th>
               <th> Duration </th>
               <th> Certificate ID</th>
               <th> Actions </th>


           </tr>

                   @foreach( $students  as    $index=>$student )
                        <tr>
                           <td>{{$index + 1 }}</td>
                            <td>{{$student->first_name }}</td>
                            <td>{{$student->last_name }}</td>
                            <td>{{$student->email }}</td>
                            <td>{{   date('d/M/Y', strtotime($student->dob))   }}</td>
                            <td>{{$student->class }}</td>
                            <td>{{$student->duration }}</td>
                            <td>{{$student->certificate_id }}</td>


                              <td>
                                  <span>
     <a   class="btn btn-warning"  href="/form/{{$student->id }}/show" >  View </a>
     {{-- <a   class="btn btn-warning"  href="{{route('show', $student->id)}}" >  View </a> --}}


      <a   class="btn btn-info"  href="/form/{{$student->id }}/edit" >  Edit </a>

     <form method="post"  action="{{ url('/form',$student->id) }}"  >
                                {{ method_field('DELETE') }}
                                @csrf
          <button type="submit"  class="btn btn-danger"  >  Delete </button>

                                </form>
                                 </span>

                            </td>

                        </tr>
                      @endforeach
         </table>



    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
