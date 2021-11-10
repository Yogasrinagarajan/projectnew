
<head>
	<title>Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<x-app-layout>
   
<x-slot name="header">
	<div class="d-flex position-relative">
	   <div class="">
	        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
	            {{ __('Employee Details') }}
	        </h2>
       </div>
       <div class=" position-absolute top-0 end-0">
         	<a href="{{ route('employee.create') }}"><button class="btn btn-primary">Add Employee</button></a>
        </div>
    </div>
    </x-slot>
    <div class="container my-5">
  		<table class="table">
  			<thead>
	         <tr>
	            <th scope="col">Id</th>
	            <th scope="col">Name</th>
	            <th scope="col">Email</th>
	            <th scope="col">Phone</th>
	             <th scope="col">Role</th>
	            <th scope="col">Action</th>
	         </tr>
	        </thead>
	       @foreach ($views as $view)
         <tr>
            <td>{{ $view->id}}</td>
            <td>{{ $view->name}}</td>
            <td>{{ $view->email}}</td>
            <td>{{ $view->phonenumber}}</td>
            <td>{{ $view->role}}</td>
            <td>
              	<a href="{{ url('employee/'.$view->id.'/edit')}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ url('employee/'.$view->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete {{  $view->name }}')">Delete</button>
                </form>
            </td>
           
         </tr>
         @endforeach
	        <tr></tr>
         </table>
  </div>
</x-app-layout>
