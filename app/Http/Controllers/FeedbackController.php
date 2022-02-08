<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Http\Controllers\Controller;
use App\Models\Http\Requests\MassDestroyFeedbackRequest;
use App\Models\Http\Requests\StoreFeedbackRequest;
use App\Models\Http\Requests\UpdateFeedbackRequest;
use App\Models\Proposal;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class FeedbackController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('feedback_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $feedback = Feedback::all();

        return view('admin.feedback.index', compact('feedback'));
    }

    public function create()
    {
        abort_if(Gate::denies('feedback_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $proposal = LoanApplication::all()->pluck('programmeName', 'id')->prepend(trans('global.pleaseSelect'), '');

        $users = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.feedback.create', compact('proposal', 'users'));
    }

    public function store(StoreFeedbackRequest $request)
    {
        $feedback = Feedback::create($request->all());

        return redirect()->route('admin.feedback.index');
    }

    public function edit(Feedback $feedback)
    {
        abort_if(Gate::denies('feedback_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $proposal = Proposal::all()->pluck('programmeName', 'id')->prepend(trans('global.pleaseSelect'), '');

        $users = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $feedback->load('proposal', 'user');

        return view('admin.feedback.edit', compact('proposal', 'users', 'feedback'));
    }

    public function update(UpdateFeedbackRequest $request, Feedback $feedback)
    {
        $feedback->update($request->all());

        return redirect()->route('admin.feedback.index');
    }

    public function show(Feedback $feedback)
    {
        abort_if(Gate::denies('feedback_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $feedback->load('proposal', 'user');

        return view('admin.feedback.show', compact('feedback'));
    }

    public function destroy(Feeedback $feeedback)
    {
        abort_if(Gate::denies('feeedback_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $feeedback->delete();

        return back();
    }

    public function massDestroy(MassDestroyFeedbackRequest $request)
    {
        Feedback::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
