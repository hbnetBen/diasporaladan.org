@extends('beautymail::templates.ark')

@section('content')

    @include('beautymail::templates.ark.heading', [
        'heading' => $fullname,
        'level' => 'h1'
    ])

    @include('beautymail::templates.ark.contentStart')
        <p>
            {{ $body }}
        </p>

    @include('beautymail::templates.ark.contentEnd')

@stop