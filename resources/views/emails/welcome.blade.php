@extends('beautymail::templates.ark')

@section('content')

    @include('beautymail::templates.ark.heading', [
        'heading' => $titre,
        'level' => 'h1'
    ])

    @include('beautymail::templates.ark.contentStart')
        <p>
            Hello {{ $firstname . ' ' . $lastname }}!
            Nous vous remercions pour l'intérêt que vous portez a ce forum.
            Votre participation a été confirmée. Prière de présenter une pièce
            d'indentité le jour du forum. Heure d'ouverture 9:00 AM.
        </p>

        <p>
        	<img src="{{url('img/flyer.png')}}" width="100%">
        </p>

    @include('beautymail::templates.ark.contentEnd')

@stop