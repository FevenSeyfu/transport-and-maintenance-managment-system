@extends('layouts.app')

@section('content')
<div class="pt-10 bg-gray-500 ">
    <button  class="btn btn-outline-primary btn-sm" onclick="location.href='{{url('Leader')}}'">Dashboard</button>
</div>
    <div class="container">
        <div class="text-center">
            <h1 class="text-5xl Uppercase bold">
               Drivers List
            </h1>
        </div>
    <div>
        @if (session('message'))
            <div class="alert alert-primary" role="alert">
                {{ session('message') }}
            </div>
        @endif
            <table class="table "  border="2">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Date of employment</th>
                    <th>status</th>
                    <th>operations</th>
                </tr>
                @foreach ($drivers as $driver)
                
                <tr>
                    <td>{{ $driver->id }}</td>
                    <td>{{ $driver->first_name }}</td>
                    <td>{{ $driver->last_name }}</td>                    
                    <td>{{ $driver->created_at }}</td>
                    <td>{{ $driver->driver_status }}</td>
                    <td><a href="driverList/{{ $driver->id }}/edit"
                        class="btn btn-outline-primary btn-sm ">
                        Edit
                        </a>
                        <form action="/driverList/{{ $driver->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            
            <hr>
        </div>
        <div class="pt-10 bg-gray-500 justify-center">
            <a href="driverList/create"
                 class="border-b-2 pb-2 border-dotted  font-italic ">
                Add A driver &rarr;
            </a>
        </div>
        
    </div>
@endsection