@extends('layouts.app')

@section('content')

<head>
  <style>
    th{
      font-weight: 400;
    }
    .form-input{
      display: inline-block;
      --tw-space-x-reverse: 0;
      margin-right: calc(1rem * var(--tw-space-x-reverse));
      margin-left: calc(1rem * calc(1 - var(--tw-space-x-reverse)));
    }
  </style>
</head>

  <div class="container p-4 shadow-md rounded-md text-left bg-gray-100" style="max-width: 83.333333%">
    <div class="p-4 shadow-md rounded-md text-left items-top bg-gray-50 flex-auto" style="max-width: max-content object-position: right">

      <table class="table-fixed border-collapse border-white leading-relaxed text-left py-3 px-6 whitespace-nowrap text-gray-600 text-sm font-light w-full">
        <tr>
          <th class="bg-green-700 text-white text-center shadow-md rounded-md">ADD APPROVAL COMMITTEE</th>
        </tr>
        <tr>
          <th>&nbsp;</th>
          <td>&nbsp;</td>
        </tr>
      </table>

      <div class="card-body">
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <form action="{{ route('Approval.Committee.Post')}}" method="POST">
              @csrf
              <div class="form-group space-y-6">

                <p class="text-gray-700 text-xs p-2.5">Please fill in all informations to add new approval committee :</p>

                <div class="add-form">
                  <label for="staffID">
                      <span class="text-gray-700 text-xs p-2.5 w-1/12">Staff ID </span>
                   </label><input class="form-input mt-1 rounded-md block w-2/4 text-xs p-1 shadow-md border-opacity-25" type="text" name="approvalCommitteeStaffID" class="form-control mb-2">
                </div>

                <div class="add-form">
                  <label for="name">
                      <span class="text-gray-700 text-xs p-2.5">Name </span>
                   </label><input class="form-input mt-1 rounded-md block w-2/4 text-xs p-1 shadow-md border-opacity-25" type="text" name="approvalCommitteeName" class="form-control mb-2">
                </div>

                  <div class="add-form">
                    <label for="username">
                        <span class="text-gray-700 text-xs p-2.5">Username </span>
                     </label><input class="form-input mt-1 rounded-md block w-2/4 text-xs p-1 shadow-md border-opacity-25" type="text" name="approvalCommitteeUsername" class="form-control mb-2">
                  </div>

                  <div class="add-form">
                    <label for="phoneNo">
                        <span class="text-gray-700 text-xs p-2.5">Phone Number </span>
                     </label><input class="form-input mt-1 rounded-md block w-2/4 text-xs p-1 shadow-md border-opacity-25" type="text" name="approvalCommitteePhoneNo" class="form-control mb-2">
                  </div>

                  <div class="add-form">
                    <label for="organization">
                        <span class="text-gray-700 text-xs p-2.5">Club/Assoc./Kull./Dept./etc </span>
                     </label><input class="form-input mt-1 rounded-md block w-2/4 text-xs p-1 shadow-md border-opacity-25" type="text" name="approvalCommitteeOrg" class="form-control mb-2">
                  </div>

                  <div class="add-form">
                    <label for="position">
                        <span class="text-gray-700 text-xs p-2.5">Position </span>
                     </label><input class="form-input mt-1 rounded-md block w-2/4 text-xs p-1 shadow-md border-opacity-25" type="text" name="approvalCommitteePosition" class="form-control mb-2">
                  </div>

                  <div class="flex justify-end">
                    <button type="submit" class="btn btn-primary bg-green-700 hover:bg-green-900 text-white text-xs font-bold py-2 px-4 rounded">
                        Save
                    </button>
                  </div>
                </div>
          </form>
          </div>
      </div>

    </div><br/>
  </div>

@endsection