@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="pt-10 bg-gray-500 ">
            <button  class="btn btn-outline-primary btn-sm" onclick="location.href='{{ url('Leader')}}'">Dashboard</button>
        </div>
        <div class="text-center">
            <h1 class="text-5xl Uppercase bold">
               Vehicles List
            </h1>
        </div>
        <div>
            
            <table class="table "  border="2">
                <tr>
               
                    <th>Car's Id</th>
                    <th>Model</th>
                    <th>License Plate Number</th>
                    <th>Service Type</th>
                    <th>Passanger Capacity</th>
                    <th>Millo Meter</th>
                    <th>Car status</th>
                    <th>Vehicle type</th>
                    <th>Additional Description</th>
                    <th>opertation</th>
                </tr>
                @foreach ($cars as $car)
                <tr>
                    <td>{{ $car->id }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->license_plate_number }}</td>                    
                    <td>{{ $car->service_type }}</td>
                    <td>{{ $car->passenger_capacity }}</td>
                    <td>{{ $car->milo_meter}}</td>
                    <td>{{ $car->car_status }}</td>
                    <td>{{ $car->service_type }}</td>
                    <td>{{ $car->description }}</td>
                    <td><a href="vehicleList/{{ $car->id }}/edit"
                            class="btn btn-outline-primary btn-sm">
                            Edit</a>
                        <form action="/vehicleList/{{ $car->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger  btn-sm">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            
            <hr>
        </div>
        <div class="pt-10 bg-gray-500 justify-cener">
            <a href="vehicleList/create"
                 class="border-b-2 pb-2 border-dotted  font-italic ">
                Add A New Car &rarr;
            </a>
        </div>
    </div>
@endsection