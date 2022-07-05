@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{ __('Hello,')}}{{ Auth::user()->username }}</div>

                     
                <div class="container">
                    <div class="text-center">
                        <h3 class="  ">
                            Transport Request Feedback
                        </h3>
                        @if (session('message'))
                            <div class="alert alert-primary" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>
                    <div class="flex text-center py-20">
                        <form action="{{ route('client.feedback.post',) }}" method="POST">
                            @csrf 
                            <h5>How would you rate your experiance from requesting a transport service upto  the end</h5>
                            <div class="form-group row">
                                <label for="feedback_rate"
                                        class="col-md-4 col-form-label text-md-right">
                                        {{ __('Rate feedback') }}
                                </label> 
                                <div class="col-md-6">
                                    <select name="feedback_rate" class="form-control" id="feedback_rate_select">
                                        <option  value="100%"> 100% </option>
                                        <option  value="80%"> 80%</option>
                                        <option  value="60%"> 60%</option>
                                        <option  value="50%"> 50%</option>
                                        <option  value=">50%"> below 50%</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">    
                                <label for="feedback_text"
                                        class="col-md-4 col-form-label text-md-right">
                                    {{ __('Additional feedback') }}
                                </label>
                                <div class="col-md-6 ">
                                    <input id="feedback_text" type="text" 
                                            class="form-control 
                                            @error('feedback_text') is-invalid @enderror" 
                                            name="feedback_text" 
                                            placeholder="If You have additional info">
                                            @error('feedback_text')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                </div>
                            </div>    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection