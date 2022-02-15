@extends('layouts.app')
@section('content')
<div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                    @section('header', 'APPROVAL COMMITTEE - VIEW DETAILS')<br>
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
                               APPROVAL COMMITTEE DETAILS
                            </span><br>
                            <strong>Name:</strong> {{$user->name}}<br>
                            <strong>Email: </strong>{{$user->email}}<br>

<br>

<a class="btn btn-default btn btn-primary bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded " href="{{ route('admin.users.index') }}">
                    Back to list
                </a>


    
        </div>
    </div>
</div>



@endsection