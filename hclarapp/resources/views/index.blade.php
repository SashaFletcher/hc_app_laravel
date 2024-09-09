<!-- index.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container mb-5">
  
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <h1 style="margin-bottom: 10px;" > Patient Details:</h1>
    <hr>
    <div class="mb-5">
      <a href="{{action('UserDetailsController@create')}}" class="btn btn-primary mb-4"  style="margin-bottom: 30px;" >Create New Record</a>
    </div>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>NHS Number</th>
        <th>Address</th>
        <th>Date of Birth</th>
        <th>Gender</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach($userdetails as $userdetail)
      @php
        $date=date('Y-m-d', $userdetail['date']);
        @endphp
      <tr>
        <td>{{$userdetail['id']}}</td>
        <td>{{$userdetail['firstname']}}</td>
        <td>{{$userdetail['lastname']}}</td>
        <td>{{$userdetail['email']}}</td>
        <td>{{$userdetail['phonenumber']}}</td>
        <td>{{$userdetail['nhsnumber']}}</td>
        <td>{{$userdetail['address']}}</td>
        <td>{{$date}}</td>   
        <td>{{$userdetail['gender']}}</td>
        
        <td><a href="{{action('UserDetailsController@edit', $userdetail['id'])}}" class="btn btn-info">Edit</a></td>
        <td>
          <form action="{{action('UserDetailsController@destroy', $userdetail['id'])}}" method="post">
            <!--@csrf-->
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>