@extends('layouts.app')
@section('content')

<div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                    @section('header', 'PROGRAMME PROPOSAL FORM (PPF) - Edit Details ')<br>
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
                            <strong>Status:</strong> {{$proposal->status->name}}<br>
<br>

<span class="px-6 py-1 flex items-center leading-normal bg-green-700 text-white shadow-md rounded-md border-r-0 border-grey-light px-3 whitespace-no-wrap text-grey-dark text-sm">
                               EDIT DETAILS
                            </span><br>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.proposal.update", [$proposal->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <strong><label class="" for="programmeName">Programme Name</label></strong>
                <input class="form-input mt-1 block w-2/4 {{ $errors->has('programmeName') ? 'is-invalid' : '' }}" type="text" name="programmeName" id="programmeName" value="{{ old('programmeName', $proposal->programmeName) }}" step="0.01">
                @if($errors->has('programmeName'))
                    <div class="invalid-feedback">
                        {{ $errors->first('programmeName') }}
                    </div>
                @endif
                <span class="help-block"></span>
            </div><br>
            <div class="form-group">
                <strong><label for="programmeOrganizer">Programme Organizer</label></strong>
                <input class="form-input mt-1 block w-2/4 {{ $errors->has('programmeOrganizer') ? 'is-invalid' : '' }}" type="text" name="programmeOrganizer" id="programmeOrganizer" value="{{ old('programmeOrganizer', $proposal->programmeOrganizer) }}">              
                 @if($errors->has('programmeOrganizer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('programmeOrganizer') }}
                    </div>
                @endif
                <span class="help-block"></span>
            </div><br>
            <div class="form-group">
                <strong><label for="status_id">Programme Status</label></strong>
                <select class="form-input mt-1 block w-2/4 select2 {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status_id" id="status_id">
                    @foreach($statuses as $id => $status)
                        <option value="{{ $id }}" {{ old('status_id') == $id ? 'selected' : '' }}>{{ $status }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block"></span>
            </div><br>
            <div class="form-group">
                <button class="btn btn-danger btn btn-primary bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded " type="submit">
                    {{ trans('Save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
