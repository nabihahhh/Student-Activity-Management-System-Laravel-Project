@extends('layouts.app')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                    @section('header', 'Manage Approval Committee')<br>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('index') }}" class="btn btn-md btn-success float-right"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </div> 
            </div>
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
                
    </div>

<div class="overflow-x-auto">
  <div class="min-w-screen min-h-screen bg-gray-100 flex-auto justify-center bg-gray-100 font-sans overflow-hidden">

  <div style="margin-bottom: 10px;" class="row flex justify-start">
        <div class="col-lg-12 text-gray-700 text-xs p-2.5">
            <a class="btn btn-success btn btn-primary bg-green-700 hover:bg-green-900 text-white text-xs font-bold py-2 px-4 rounded-md" href="{{ route('admin.users.create') }}">
                {{ trans('Add New Approval Committee') }}
            </a>
        </div>
    </div>
    &nbsp;
    <div class="overflow-x-auto">
    <div class="min-w-screen min-h-screen bg-gray-100 flex-auto justify-center bg-gray-100 font-sans overflow-hidden">
<table class="table-fixed border-collapse border-white leading-relaxed text-left py-3 px-6 whitespace-nowrap text-gray-600 text-sm font-light w-full">
    
      <tr>   
      <th>&nbsp;</th>
        
        <th class="bg-green-700 text-white text-center shadow-md rounded-md">APPROVAL COMMITTEE LIST</th>
      </tr>
      <tr>
      <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>
    </table>


    <div class="w-full">
      <div class="bg-white shadow-md rounded my-6">

        <table class="min-w-max w-full table-auto">
          <thead>
          <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
              <th class="py-3 px-6 text-left">ID</th>
              <th class="py-3 px-6 text-left">NAME</th>
              <th class="py-3 px-6 text-left">EMAIL</th>
              <th class="py-3 px-6 text-center">CLUB/ASSOCIATION/KULLIYAH/DEPARTMENT</th>
              <th class="py-3 px-6 text-center">ACTION</th>
          </tr>
          </thead>
             <tbody class="text-gray-600 text-sm font-light">
                    @foreach($users as $key => $user)
                    @foreach($user->roles as $key => $item)
                    @if ( $item->display_name == "ApprovalCommittee")
                        <tr data-entry-id="{{ $user->id }}"  class="border-b border-gray-200 hover:bg-gray-100 flex-auto">

                            <td class="py-3 px-6 text-left whitespace-nowrap font-medium">
                                {{ $user->id ?? '' }}
                            </td>
                            <td>
                                {{ $user->name ?? '' }}
                            </td>
                            <td>
                                {{ $user->email ?? '' }}
                            </td>
                            
                            <td class="text-center">
                                @foreach($user->roles as $key => $item)
                                @if ( $item->display_name == "ApprovalCommittee")
                                    <span class="badge badge-info "></span>
                                @endif
                                @endforeach
                            </td>
                            <td class="text-center">
                                
                                    <a class="btn btn-xs btn-primary bg-green-200 text-green-600 py-0.3 px-2 rounded-full text-xs" href="{{ route('admin.users.show', $user->id) }}">
                                        {{ trans('View') }} 
                                    </a>
                                

                               
                                    <a class="btn btn-xs btn-info bg-yellow-200 text-yellow-600 py-0.3 px-2 rounded-full text-xs" href="{{ route('admin.users.edit', $user->id) }}">
                                        {{ trans('Edit') }} 
                                    </a>
                            

                                
                                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('{{ trans('Are you sure?') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger bg-red-200 text-red-600 py-0.3 px-2 rounded-full text-xs" value="{{ trans('Delete') }}">
                                    </form>
                                

                            </td>

                        </tr>
                        @endif
                    @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
</div>

<
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('user_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.users.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-User:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection