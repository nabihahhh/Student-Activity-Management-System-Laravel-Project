@extends('layouts.app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">

<div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                    @section('header', 'Programme Proposal Form  (PRF)')<br>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('index') }}" class="btn btn-md btn-success float-right"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div> 
            </div>

            <div class="container px-20 py-5 w-full mx-auto pb-10 flex justify-center  " >
<div class="p-10 shadow-md rounded-md text-left bg-gray-50 w-screen mt-4">
       
            
                <h1 class="text-3xl">Your submission for the Programme Report Form (PRF) has been successful!</h1><br>
                <h3 class="text-base">Please wait for a few days of working hours after submitting the form for the report to be approved.<br><br>
                <form action="{{ route('store') }}" method="post" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <table class="table table-bordered">
                        <div class="p-2 flex space-x-96">
                            <div class="flex justify-end space-x-4">
                                <a type="button" href="{{ route('dashboard') }}" class="btn btn-primary bg-green-700 hover:bg-green-900 text-white font-bold py-2 px-4 rounded">
                                    Back to Homepage
                                    </a>
                            </div>
                        </div>
                    </table>

                    

                </form>
            
        </div>
@endsection 

