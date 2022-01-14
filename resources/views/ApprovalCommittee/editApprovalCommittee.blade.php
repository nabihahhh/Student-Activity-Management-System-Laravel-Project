@extends('layouts.app')

@section('content')

<head>
  <style>
    th{
      font-weight: 400;
    }
  </style>
</head>

  <div class="container p-4 shadow-md rounded-md text-left bg-gray-100" style="max-width: 83.333333%">
    <div class="p-4 shadow-md rounded-md text-left items-top bg-gray-50 flex-auto" style="max-width: max-content object-position: right">

      <table class="table-fixed border-collapse border-white leading-relaxed text-left py-3 px-6 whitespace-nowrap text-gray-600 text-sm font-light w-full">
        <tr>
          <th class="bg-green-700 text-white text-center shadow-md rounded-md">EDIT APPROVAL COMMITTEE</th>
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
          <form action="/update/{{$approvalcommittee['id']}}" method="POST">
              @csrf
              <div class="form-group">

                <div>
                  <label>
                      <span class="text-gray-700 text-xs p-2.5 w-1/12">Staff ID </span>
                   </label><input class="inline-block form-input mt-1 rounded-md block w-2/4 text-xs p-1 shadow-md border-opacity-25" type="text" name="approvalCommitteeStaffID" value="{{$approvalcommittee['approvalCommitteeStaffID']}}" class="form-control mb-2">
                </div>
                <br/>

                <div>
                  <label>
                      <span class="text-gray-700 text-xs p-2.5">Name </span>
                   </label><input class="inline-block form-input mt-1 rounded-md block w-2/4 text-xs p-1 shadow-md border-opacity-25" type="text" name="approvalCommitteeName" value="{{$approvalcommittee['approvalCommitteeName']}}" class="form-control mb-2">
                </div>
                  <br>

                  <div>
                    <label>
                        <span class="text-gray-700 text-xs p-2.5">Username </span>
                     </label><input class="inline-block form-input mt-1 rounded-md block w-2/4 text-xs p-1 shadow-md border-opacity-25" type="text" name="approvalCommitteeUsername" value="{{$approvalcommittee['approvalCommitteeUsername']}}" class="form-control mb-2">
                  </div>
                  <br>

                  <div>
                    <label>
                        <span class="text-gray-700 text-xs p-2.5">Phone Number </span>
                     </label><input class="inline-block form-input mt-1 rounded-md block w-2/4 text-xs p-1 shadow-md border-opacity-25" type="text" name="approvalCommitteePhoneNo" value="{{$approvalcommittee['approvalCommitteePhoneNo']}}" class="form-control mb-2">
                  </div>
                  <br>

                  <div>
                    <label>
                        <span class="text-gray-700 text-xs p-2.5">Club/Assoc./Kull./Dept./etc </span>
                     </label><input class="inline-block form-input mt-1 rounded-md block w-2/4 text-xs p-1 shadow-md border-opacity-25" type="text" name="approvalCommitteeOrg" value="{{$approvalcommittee['approvalCommitteeOrg']}}" class="form-control mb-2">
                  </div>
                  <br>

                  <div>
                    <label>
                        <span class="text-gray-700 text-xs p-2.5">Position </span>
                     </label><input class="inline-block form-input mt-1 rounded-md block w-2/4 text-xs p-1 shadow-md border-opacity-25" type="text" name="approvalCommitteePosition" value="{{$approvalcommittee['approvalCommitteePosition']}}" class="form-control mb-2">
                  </div>
                  <br>

                  <div class="flex justify-end">
                    <button type="submit" class="btn btn-primary bg-green-700 hover:bg-green-900 text-white text-xs font-bold py-2 px-4 rounded">
                        Update
                    </button>
                  </div>
                </div>
        </div>
          </form>
      </div>

    </div><br/>
  </div>

@endsection
