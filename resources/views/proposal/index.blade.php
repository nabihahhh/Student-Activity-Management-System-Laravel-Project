@extends('layouts.app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">
<div class="container">
<div class="container p-4 shadow-md rounded-md text-left bg-gray-100 flex" style="max-width: 83.333333%">
<div class="p-4 rounded-md text-left flex-auto  " style="max-width: max-content ">
    
    </div>
    <div class="p-4 shadow-md rounded-md text-left bg-gray-50 flex-auto" style="max-width: max-content object-position: right">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body"> 
                <h1 class="text-3xl">Your submission for the Programme Report Form has been successful!</h1>
                <h3 class="text-base">Please check your email for the downloadable Programme Report file that has been submitted.</h3><br>
                <form action="{{ route('store') }}" method="post" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <table class="table table-bordered">
                        <div class="p-2 flex space-x-96">
                            <div class="flex justify-end space-x-4">
                                <a type="button" href="{{ route('report.create.step.3') }}" class="btn btn-primary bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded">
                                    Back to Homepage
                                    </a>
                            </div>
                        </div>
                    </table>

                    

                </form>
            </div>
        </div>
    </div>
</div>
@endsection 