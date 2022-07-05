@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
            <div class="card">
                <div class="card-header"> {{ __('Hello,')}}{{ Auth::user()->fullName() }} </div>

                <div class="card-body">
                      
                    
                    <table class="table">
                        <tr>
                            <th>Assigned By</th>
                            <th>Traveler's Name</th>
                            <th>Destination</th>
                            <th>Starting Time</th>
                            <th>Ending Time</th>
                            <th>vehicles License Plate Number</th>
                            <th>initial kilo meter reading</th>
                            <th>final kilo meter reading</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @forelse ($transports as $transport )
                            <tr>
                                <td>{{ $transport->Approved_by }}</td>
                                <td>{{ $transport->travelers_name }}</td>
                                <td>{{ $transport->destination }}</td>
                                <td>{{ $transport->starting_time }}</td>
                                <td>{{ $transport->ending_time }}</td>
                                <td>{{ $transport->car_license_num }}</td>
                                <td>{{ $transport->initial_kilo_meter }}</td>
                                <td>{{ $transport->final_kilo_meter }}</td>
                                @if ($transport->driver_status == 'driver_Completed') 
                                    <td>Completed</td>
                               @elseif ( $transport->final_kilo_meter !== 0 )
                                    <td>
                                        <a href="{{ route('driver.completed',$transport->id) }}"
                                            class="btn btn-success my-2 btn-sm">
                                                Completed
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('driver.reading',$transport->id) }}"
                                            class="btn btn-primary btn-sm">
                                                Edit 
                                        </a>
                                        
                                    </td>
                                    <td>
                                        <a href="{{ route('driver.maintenance.req',$transport->id) }}"
                                            class="btn btn-primary btn-sm ">
                                                Request maintenance 
                                        </a>
                                    </td>
                                @else
                                    <td>
                                        <a href="{{ route('driver.reading',$transport->id) }}"
                                            class="btn btn-primary btn-sm">
                                                Edit 
                                        </a>
                                        
                                    </td>
                                    <td>
                                        <a href="{{ route('driver.maintenance.req',$transport->id) }}"
                                            class="btn btn-primary btn-sm ">
                                                Request maintenance 
                                        </a>
                                    </td>
                                @endif
                                </tr>
                        @empty
                            <tr>
                               <td colspan="7">Not assigned yet.</td>
                            </tr>
                        @endforelse
                   </table>
                 </div>
            </div>
    </div>
</div>
@endsection