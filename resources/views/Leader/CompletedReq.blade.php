@extends('layouts.app')

@section('content')
    <div class="container" id="top">
        <div class="row  justify-content-end" >
            <button  class="btn btn-outline-primary btn-sm" onclick="location.href='{{ url('Leader')}}'">Dashboard</button>
            <a href="#Maintenance" class="btn btn-outline-primary btn-sm" class>Maintenance</a>
        </div>
        <div class="text-center">
            <h2>
               This Month Completed requests
            </h2>
        </div>
        <div class="flex justify-center py-20">
            <form action="/month" method="POST">
                @csrf 
                @method('PUT')
                <div class="form-group row">
                    <fieldset class="">
                        <label for="placeTextarea"><h4>Monthly Report</h4></label>
                        <select class="form-control" id="month" name="month" multiple>
                            <option value=""> Select Month</option>
                            @foreach ($getMonth as $month)
                                <option>
                                    {{ $month }}
                                </option>
                            @endforeach
                        </select>
                    </fieldset>
                </div>
                <div class="col-md-6 my-0">
                    <button type="submit" class="btn btn-outline-primary">
                        {{ __('Submit') }}
                    </button>
                </div>
            </form>
        <div class="d-flex justify-content-center">
            <table class="table my-2"  border="2">
                <thead>
                    <tr>
                        <th colspan="12" style="text-align: center"><h3>Transport Services</h3></th>
                    </tr>
                    <tr>
                        <th>Requested By</th>
                        <th>Travelers Name</th>
                        <th>Destination</th>
                        <th>Reason for Travel</th>
                        <th>Starting Time </th>
                        <th>Ending Time</th>
                        <th>Driver's Name</th>
                        <th>Vehicle's License plate number</th>
                        <th>initial kilometer</th>
                        <th>final kilometer</th>
                        <th>Traveled Kilometers</th>
                        <th>Approved BY</th>
                    </tr>
                </thead>
            @forelse ($transports as $transport)
                <tr>
                    <td>{{ $transport->requested_by }}</td>
                    <td>{{ $transport->travelers_name }}</td>                    
                    <td>{{ $transport->destination }}</td>
                    <td>{{ $transport->reason }}</td>
                    <td>{{ $transport->starting_time}}</td>
                    <td>{{ $transport->ending_time }}</td>
                    <td>{{ $transport->driver_name }}</td>
                    <td>{{ $transport->car_license_num }}</td>
                    <td>{{ $transport->initial_kilo_meter }}</td>
                    <td>{{ $transport->final_kilo_meter }}</td>
                    <td>{{ $transport->Traveled_kilo_meter }}</td>
                    <td>{{ $transport->Approved_by }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="12">No Request has been Completed.</td>
                </tr>
            @endforelse
        </table>
        </div>
        <hr>
        <div class="d-flex justify-content-center" id="Maintenance">
            <table class="table" border="2">
                <tr>
                    <th colspan="15" style="text-align: center"><h3>Maintenance services</h3></th>
                </tr>
                <tr>
                    <th>Assigned Mechanic</th>                    
                    <th>Vehicle Type</th>
                    <th>license Plate Number</th>
                    <th>kilometer reading</th>
                    <th>issues To be fixed</th>
                    <th>Starting Date</th>
                    <th>Fixed Issues</th>
                    <th colspan="3">Cost of Maintenance</th>
                    <th>Finished at(date)</th>
                    <th>Total Time</th>
                    <th>Maintenance type</th>
                    <th>Shift Leader's Name</th>
                    <th>Driver's Name</th>
                </tr>
                <tr>
                    <th colspan="7"></th>
                    <th>Material cost</th>
                    <th>Labour Cost</th>
                    <th>Total</th>
                    <th colspan="5"></th>
                </tr>
                @forelse ($maintenances as $maintenance )
                    <tr>
                        <td>{{ $maintenance->assigned_mechanic }}</td>
                        <td>{{ $maintenance->vehicle_type }}</td>
                        <td>{{ $maintenance->license_number  }}</td>
                        <td>{{ $maintenance->kiloMeter_reading }}</td>
                        <td>{{ $maintenance->issues }}</td>
                        <td>{{ $maintenance->starting_date }}</td>
                        <td>{{ $maintenance->fixed_issues }}</td>
                        <td>{{ $maintenance->material_expense }}</td>
                        <td>{{ $maintenance->Labor_expense }}</td>
                        <td>{{ $maintenance->Total_expense }}</td>
                        <td>{{ $maintenance->finished_date }}</td>
                        <td>{{ $maintenance->Total_time }}</td>
                        <td>{{ $maintenance->maintenance_type }}</td>
                        <td>{{ $maintenance->shift_leader }}</td>
                        <td>{{ $maintenance->driver_name }}</td>
                     </tr>
                @empty
                    <tr>
                        <td colspan="15" style="text-align: center">No Request has been Completed .</td>
                    </tr>
                @endforelse
            </table>
            <a href="#top" class="row fixed-bottom  btn  btn-primary">
                Back to top
            </a>
        </div>
    </div>
@endsection