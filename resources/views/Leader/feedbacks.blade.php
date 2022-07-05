@extends('layouts.app')

@section('content')
<div class="pt-10 bg-gray-500 ">
    <button  class="btn btn-outline-primary btn-sm" onclick="location.href='{{url('Leader')}}'">Dashboard</button>
</div>
    <div class="container">
        <div class="text-center">
            <h2 class="text-5xl Uppercase bold">
              Feedbacks Received from users
            </h2>
        </div>
    <div>
        <table class="table"  border="2">
                <tr>
                    <th>Feedback from</th>
                    <th>Rate</th>
                    <th>Additional comments</th>
                    <th>Date</th>
                 </tr>
                @foreach ($feedbacks as $feedback)
                
                <tr>
                    <td>{{ $feedback->feedback_By }}</td>
                    <td>{{ $feedback->feedback_rate }}</td>
                    <td>{{ $feedback->feedback_text }}</td>  
                    <td>{{ $feedback->created_at }}</td>  
                </tr>
                @endforeach
            </table>
            
            <hr>
        </div>
    </div>
@endsection