@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="col-md-6">
		
	</div>
	<div class="col-md-6">
	<div class="container">
    <div class="row">
<div class="card-header text-center">
        @if(Session::has('message')) 
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
<form method="POST" action="{{route('customer.store')}}">
	@csrf
				<div class="form-group">
				<label for="uname">Username</label>
				<input type="text" class="form-control" name="name" id="uname" placeholder="...your full names" required="">
				    </div>
				<div class="form-group">
				<label for="mail">Email Address</label>
				<input type="text" class="form-control" name="email" id="mail" placeholder="...enter your email address" required="">
				</div>
				<div class="form-group">
				<label for="dob">Date Of Birth</label>
				<input type="date" class="form-control" name="dob" id="dob" placeholder="...select your date of birth here" required="">
				</div>
				<div class="form-group">
				<label for="id_no">ID Number</label>
				<input type="text" class="form-control" name="no_id" id="id_no" placeholder="...type your id number" required="">
				</div>
                <div class="form-group">
				<label for="gen">Gender</label>
				<input type="text" class="form-control" name="gender" id="gen" placeholder="...show your gender" required="">
				</div>
				<div class="form-group">
				<label for="phno">Phone Number</label>
				<input type="text" class="form-control" name="phone" id="phno" placeholder="...phone number" required="">
				</div>
				<div class="form-group">
				<label for="loc">Location</label>
				<input type="text" class="form-control" name="location" id="loc" placeholder="...your location" required="">
				</div>
				<button type="submit" class="btn btn-info">Register</button>
			</form>
</div>
<table class="table table-hover">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Name</th>
            <th scope="col">Email Adress</th>
            <th scope="col">DOB</th>
            <th scope="col">ID No.</th>
            <th scope="col">Gender</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Location</th>
        </tr>
        </thead>
        <tbody>
        	<div class="row">
            @foreach($customer as $customers)
        <tr>
            <th scope="row"></th>
            <td>{{ $customers->name }}</td>
            <td>{{ $customers->email }}</td>
            <td>{{ $customers->dob }}</td>
            <td>{{ $customers->no_id }}</td>
            <td>{{ $customers->gender }}</td>
            <td>{{ $customers->phone }}</td>
            <td>{{ $customers->location }}</td>


        </tr>
        @endforeach
    </div>
        </tbody>
    </table>
    </div>
 </div>
</div>
</body>
</html>
@endsection