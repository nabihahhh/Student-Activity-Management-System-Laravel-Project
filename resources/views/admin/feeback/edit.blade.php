@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.feedback.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.feedbacks.update", [$feedback->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="proposal_id">{{ trans('cruds.feedback.fields.proposal') }}</label>
                <select class="form-control select2 {{ $errors->has('proposal') ? 'is-invalid' : '' }}" name="proposal_id" id="proposal_id" required>
                    @foreach($proposals as $id => $proposal)
                        <option value="{{ $id }}" {{ ($feedback->proposal ? $feedback->proposal->id : old('proposal_id')) == $id ? 'selected' : '' }}>{{ $proposal }}</option>
                    @endforeach
                </select>
                @if($errors->has('proposal'))
                    <div class="invalid-feedback">
                        {{ $errors->first('proposal') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.feedback.fields.proposal_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="user_id">{{ trans('cruds.feedback.fields.user') }}</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id" required>
                    @foreach($users as $id => $user)
                        <option value="{{ $id }}" {{ ($feedback->user ? $feedback->user->id : old('user_id')) == $id ? 'selected' : '' }}>{{ $user }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.feedback.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="feedback_text">{{ trans('cruds.feedback.fields.feedback_text') }}</label>
                <textarea class="form-control {{ $errors->has('feedback_text') ? 'is-invalid' : '' }}" name="feedback_text" id="feedback_text" required>{{ old('feedback_text', $feedback->feedback_text) }}</textarea>
                @if($errors->has('feedback_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('feedback_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.feedback.fields.feedback_text_helper') }}</span>
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