@extends('layouts.app')

@section('content')
<div class="row  justify-content-end mr-4" id="top" >
    <button  class="btn btn-outline-primary btn-sm"  onclick="location.href='{{url('Leader')}}'">Dashboard</button>
</div>
    <div class="container">
        <div class="text-center" >
            <h2 >
               Drivers List
            </h2>
        </div>
    <div>
        
        <div class="my-2">
            <a href="driverList/create"
                 class="border-b-2 pb-2 border-dotted  font-bold" style="font-size: 1.5em">
                Add A driver &rarr;
            </a>
        </div>
        <div class="d-flex justify-content-center">
            <table class="table "  border="2">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>UserName</th>
                    <th>status</th>
                    <th>operations</th>
                </tr>
                @foreach ($drivers as $driver)
                
                <tr>
                    <td>{{ $driver->id }}</td>
                    <td>{{ $driver->first_name }}</td>
                    <td>{{ $driver->last_name }}</td>     
                    <td>{{ $driver->username }}</td>   
                    <td>{{ $driver->driver_status }}</td>
                    <td><a href="driverList/{{ $driver->id }}/edit"
                        class="btn btn-outline-primary btn-sm ">
                        Edit
                        </a>
                        <form action="/driverList/{{ $driver->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger my-2 btn-sm">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
            <a href="#top" class="row fixed-bottom  btn  btn-primary">
                Back to top
            </a>
        </div>
    </div>
@endsection