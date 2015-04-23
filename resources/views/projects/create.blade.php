@extends('app')

@section('content')
    <h2>Create Project</h2>

    {!! Form::model(new l5\Project, ['route' => ['projects.store']]) !!}
        @include('projects/partials/_form', ['submit_text' => 'Create Project'])
    {!! Form::close() !!}
@endsection