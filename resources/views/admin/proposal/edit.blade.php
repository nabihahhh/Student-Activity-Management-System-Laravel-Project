@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.proposaltitle_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.proposal.update", [$proposal->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="programmeName">{{ trans('cruds.proposalfields.programmeName') }}</label>
                <input class="form-control {{ $errors->has('programmeName') ? 'is-invalid' : '' }}" type="number" name="programmeName" id="programmeName" value="{{ old('programmeName', $proposal->programmeName) }}" step="0.01" required>
                @if($errors->has('programmeName'))
                    <div class="invalid-feedback">
                        {{ $errors->first('programmeName') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.proposalfields.programmeName_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.proposalfields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description', $proposal->description) }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.proposalfields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="status_id">{{ trans('cruds.proposalfields.status') }}</label>
                <select class="form-control select2 {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status_id" id="status_id">
                    @foreach($statuses as $id => $status)
                        <option value="{{ $id }}" {{ old('status_id') == $id ? 'selected' : '' }}>{{ $status }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.proposalfields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
