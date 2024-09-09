<!-- edit.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>edit</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Edit Patient Details</h2><br  />
        <form method="post" action="{{action('UserDetailsController@update', $id)}}">
        <!--@csrf-->
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input name="_method" type="hidden" value="PATCH">

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="First Name">First Name:</label>
            <input type="text" class="form-control" name="firstname" value="{{$userdetail->firstname}}">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Last Name">Last Name:</label>
            <input type="text" class="form-control" name="lastname" value="{{$userdetail->lastname}}">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="email" value="{{$userdetail->email}}">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Phone Number">Phone Number:</label>
            <input type="text" class="form-control" name="phonenumber" value="{{$userdetail->phonenumber}}">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="NHS No">NHS No:</label>
            <input type="text" class="form-control" name="nhsnumber" value="{{$userdetail->nhsnumber}}">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Address">Address:</label>
            <input type="text" class="form-control" name="address" value="{{$userdetail->address}}">
          </div>
        </div>

        <!--<div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Date of Birth">Date of Birth:</label>
            <input type="text" class="form-control" name="date">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Date of Birth: </strong>
            <input class="date form-control"  type="text" id="datepicker" name="date" value="{{$userdetail->date}}">
         </div>
        </div>-->

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Gender">Gender:</label>
            <input type="text" class="form-control" name="gender" value="{{$userdetail->gender}}">
          </div>
        </div>





        <!--<div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" value="{{$userdetail->name}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="email" value="{{$userdetail->email}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="number">Phone Number:</label>
              <input type="text" class="form-control" name="number" value="{{$userdetail->number}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-left:38px">
                <lable>Passport Office</lable>
                <select name="office">
                  <option value="Mumbai"  @if($userdetail->office=="Mumbai") selected @endif>Mumbai</option>
                  <option value="Chennai"  @if($userdetail->office=="Chennai") selected @endif>Chennai</option>
                  <option value="Delhi" @if($userdetail->office=="Delhi") selected @endif>Delhi</option>
                  <option value="Bangalore" @if($userdetail->office=="Bangalore") selected @endif>Bangalore</option>
                </select>
            </div>
        </div>-->

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-primary" style="margin-left:38px">Update</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>