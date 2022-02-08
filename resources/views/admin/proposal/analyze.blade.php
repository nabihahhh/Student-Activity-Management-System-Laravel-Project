@extends('layouts.app')
@section('content')
<div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                    @section('header', 'PROGRAMME PROPOSAL FORM (PPF) - Give Approval and Feedback ')<br>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('index') }}" class="btn btn-md btn-success float-right"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div> 
            </div>

<div class="container px-20 py-5 w-full mx-auto pb-10 flex justify-center   " >
<div class="p-10 shadow-md rounded-md text-left bg-gray-50 w-screen mt-4">
    <div class="card">
    <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white shadow-md rounded-md border-r-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               PROGRAMME DETAILS
                            </span><br>
                            <strong>Programme ID:</strong> {{$proposal->id}}<br>
                            <strong>Programme Name: </strong>{{$proposal->programmeName}}<br>
                            <strong>Organiser:</strong> {{$proposal->programmeOrganizer}}<br>
                            <strong>Date:</strong> {{$proposal->date}}<br>
<br>
        <div class="card-body">
            <form method="POST" action="{{ route("admin.proposal.analyze", $proposal) }}" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group">
                <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white shadow-md rounded-md border-r-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               FEEDBACK
                            </span><br>
                
                    <!-- <label for="description">{{ trans('cruds.feedback.title_singular') }}</label> -->
                    <textarea class="w-full  form-control {{ $errors->has('feedback_text') ? 'is-invalid' : '' }}" name="feedback_text" id="feedback_text">{{ old('feedback_text') }}</textarea>
                    @if($errors->has('feedback_text'))
                        <div class="invalid-feedback">
                            {{ $errors->first('feedback_text') }}
                        </div>
                    @endif
                
                </div>
               <br>
                <div class="form-group">
                    <button class="btn btn-danger  bg-blue-400 text-white py-1 px-6 rounded-full text-sm" name="approve" type="submit">
                        Approve
                    </button>
                    <button class="btn btn-danger  bg-red-200 text-red-600 py-1 px-6 rounded-full text-sm" name="reject" type="submit">
                        Reject
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
