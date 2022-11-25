@extends('admin.templates.dashboard')

@section('content')
<div class="card">
    <div class="card-header">
        <span>{{ trans('global.order.title_singular') }} {{ trans('global.list') }}</span>
        <div class="float-right">
            <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary">{{ trans('global.back_to_list') }}</a>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <div class="text-center">
                {{ $message }}
            </div>
        </div>
    </div>
</div>
@endsection
