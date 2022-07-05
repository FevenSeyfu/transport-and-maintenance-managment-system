@extends('layouts.app')

@section('content')

    <div class="container" id="top" >
        <div class="row  justify-content-end " >
            <button  class="btn btn-outline-primary btn-s" onclick="location.href='{{ url('Leader')}}'">Dashboard</button>
        </div>
        <div class="text-center"  >
            <h1 class="text-5xl Uppercase bold">
               Vehicles List
            </h1>
        </div>
        <div>
            <div class="pt-10 bg-gray-500 justify-cener">
                <a href="vehicleList/create"
                     class=" font-italic font-4em "  style="font-size: 1.5em">
                    Add A New Vehicle &rarr;
                </a>
            </div>
            <div class="d-flex justify-content-center ">
                <table class="table"   border="2">
                    <tr>
               
                    <th>ID</th>
                    <th>Model</th>
                    <th>License Plate Number</th>
                    <th>Motor Number</th>
                    <th>Chassis Number</th>
                    <th>Year</th>
                    <th>Age</th>
                    <th>Service Type</th>
                    <th>Assigned Location</th>
                    <th>Passanger Capacity</th>
                    <th>kilo Meter</th>
                    <th>Vehicle status</th>
                    <th>Additional Description</th>
                    <th>opertation</th>
                </tr>
                @foreach ($cars as $car)
                <tr>
                    <td>{{ $car->id }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->license_plate_number }}</td>    
                    <td>{{ $car->Motor_number }}</td>    
                    <td>{{ $car->chassis_number }}</td>
                    <td>{{ $car->Year }}</td>
                    <td>{{ $car->age }}</td>                    
                    <td>{{ $car->service_type }}</td>
                    <td>{{ $car->location }}</td>
                    <td>{{ $car->passenger_capacity }}</td>
                    <td>{{ $car->kilo_meter}}</td>
                    <td>{{ $car->car_status }}</td>
                    <td>{{ $car->description }}</td>
                    <td><a href="vehicleList/{{ $car->id }}/edit"
                            class="btn btn-outline-primary btn-sm">
                            Edit</a>
                        <form action="/vehicleList/{{ $car->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger my-2  btn-sm">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            </div>
            <hr>
        </div>
        
        <a href="#top" class="row fixed-bottom  btn  btn-primary">
            Back to top
        </a>
    </div>
@endsection