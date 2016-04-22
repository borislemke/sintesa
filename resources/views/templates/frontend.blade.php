@extends('layout/' . $data->template)

@section('content')
    @foreach($data->content as $module)
        @if($module->status)
            @include('modules.' . $module->type, compact('module'))
        @endif
    @endforeach
@endsection
