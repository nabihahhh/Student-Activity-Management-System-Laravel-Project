@extends('layouts.app')
@section('content')

<div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                    @section('header', 'APPROVAL COMMITTEE - Edit User Details ')<br>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('index') }}" class="btn btn-md btn-success float-right"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div> 
            </div>

            <div class="container px-20 py-5 w-full mx-auto pb-10 flex justify-center   " >
                
<div class="p-10 shadow-md rounded-md text-left bg-gray-50 w-screen mt-4">

    <div class="card">

    <a class="btn btn-default btn btn-primary bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded " href="{{ route('admin.users.index') }}">
                    Back to list
                </a><br><br><br>
    <span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white shadow-md rounded-md border-r-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               APPROVAL COMMITTEE DETAILS
                            </span><br>
                            <strong>Name:</strong> {{$user->name}}<br>
                            <strong>Email: </strong>{{$user->email}}<br>
                            
                           
<br>

<span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white shadow-md rounded-md border-r-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               EDIT DETAILS
                            </span><br>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.users.update", [$user->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <strong><label class="" for="name">Name</label></strong>
                <input class="form-input mt-1 block w-2/4  {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block"></span>
            </div><br>
            <div class="form-group">
                <strong><label class="" for="email">Email</label></strong>
                <input class="form-input mt-1 block w-2/4  {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block"></span>
            </div><br>
            <!-- <div class="form-group">
                <label class="" for="password">Password</label>
                <input class="form-input mt-1 block w-2/4  {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password" id="password">
                @if($errors->has('password'))
                    <div class="invalid-feedback">
                        {{ $errors->first('password') }}
                    </div>
                @endif
                <span class="help-block"></span>
            </div> -->
           <br>
            <div class="form-group">
                <button class="btn btn-danger btn btn-primary bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded" type="submit">
                    Save
                </button>
            </div>
<br>

        </form>
    </div>
</div>



@endsection