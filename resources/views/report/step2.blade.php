
@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">
<div class="container">
<div class="container p-4 shadow-md rounded-md text-left bg-gray-100 flex" style="max-width: 83.333333%">
    <div class="p-4 rounded-md text-left flex-auto  " style="max-width: max-content ">
    <img class="object-scale-down h-48 w-full"  src="https://ih1.redbubble.net/image.1066412296.0216/fposter,small,wall_texture,product,750x1000.u1.jpg">
    </div>
    <div class="p-4 shadow-md rounded-md text-left bg-gray-50 flex-auto" style="max-width: max-content object-position: right">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                    @section('header', 'PROGRAMME REPORT FORM (PRF) - Create (Organization Representative Only)')<br>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('signup') }}" class="btn btn-md btn-success float-right"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div> 
            </div>
            <div class="card-body">
                <h3>Step 2</h3>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('report.post.step.2') }}" method="POST">
                    @csrf
                    <div class="form-group">

                        <label for="name">
                            <span class="text-gray-700">Achievements/observation</span>
                         </label>
                        <input class="form-input mt-1 block w-full" type="text" name="achievementsObservation" class="form-control mb-2" placeholder="Enter" value="{{ session()->get('report.achievementsObservation)') }}">
                        <br>

                        <label for="name">
                            <span class="text-gray-700">Shortcomings</span>
                         </label>
                        <input class="form-input mt-1 block w-full" type="text" name="shortcomings" class="form-control mb-2" placeholder="Enter" value="{{ session()->get('report.shortcomings)') }}">
                        <br>

                        <label for="name">
                            <span class="text-gray-700">Conclusion</span>
                         </label>
                        <input class="form-input mt-1 block w-full" type="text" name="conclusion" class="form-control mb-2" placeholder="Enter" value="{{ session()->get('report.conclusion)') }}">
                        <br>

                        <label for="name">
                            <span class="text-gray-700">Suggestions</span>
                         </label>
                        <input class="form-input mt-1 block w-full" type="text" name="suggestions" class="form-control mb-2" placeholder="Enter" value="{{ session()->get('report.suggestions)') }}">
                        <br>

                        <div class="p-2 flex space-x-96">
                            <div class="flex justify-start">
                                <a type="button" href="{{ route('signup') }}" class="btn btn-warning bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded">
                                    Back
                                </a>
                            </div>

                            <div class="flex justify-end space-x-4">
                                <button type="submit" class="btn btn-primary bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                    Cancel
                                </button>
                                <button type="submit" class="btn btn-primary bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">
                                    Save
                                </button>
                                <button type="submit" class="btn btn-primary bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded ">
                                    Next
                                </button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 

