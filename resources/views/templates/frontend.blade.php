@extends('layout/' . $data->template)

@section('content')
    @foreach($data->content as $module)
        @include('modules.' . $module->type, compact('module'))
    @endforeach
@endsection
