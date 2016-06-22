@extends('beautymail::templates.ark')

@section('content')

    @include('beautymail::templates.ark.heading', [
        'heading' => $titre,
        'level' => 'h1'
    ])

    @include('beautymail::templates.ark.contentStart')
        <p>
            Cher(e) {{ $firstname . ' ' . $lastname }},
            Le Député de Pétion-Ville, l’Honorable JERRY TARDIEU,
            vous remercie d’avoir signé la pétition pour appuyer son 
            action au parlement haïtien en faveur de la diaspora haïtienne. 
            Votre soutien aidera à la cause de l’intégration effective des haïtiens 
            vivant à l’étranger à la vie nationale.
        </p>
        <p>
            N'oubliez pas de suivre le Député sur les réseaux sociaux:
            <ul>
                <li>
                    <a href="https://www.facebook.com/jerry.tardieu">Facebook</a>
                </li>
                <li>
                    <a href="https://twitter.com/JerryTardieu">Twitter</a>
                </li>
                <li>
                	<a href="https://instagram.com/jerrytardieu/">Instagram</a>
                </li>
                <li>
                	<a href="https://www.linkedin.com/in/jerrytardieu ">LinkedIn</a>
                </li>
                <li>
                	<a href="https://www.flickr.com/photos/jerrytardieu/">Flickr</a>
                </li>
                <li>
                	<a href="https://en.wikipedia.org/wiki/Jerry_Tardieu">Wikipedia</a>
                </li>
                <li>
                	<a href="http://www.slideshare.net/JerryTardieu/candidat-49518831">Slideshare</a>
                </li>
                <li>
                	<a href="http://issuu.com/jerrytardieu/docs/livre_depute_last">Issuu</a>
                </li>
                <li>
                	<a href="https://soundcloud.com/jerry-tardieu">SoundCloud</a>
                </li>
                <li>
                	<a href="https://vimeo.com/jerrytardieu">Vimeo</a>
                </li>
                <li>
                	<a href="http://www.jerrytardieu.com/">Site Web</a>
                </li>
            </ul>
        </p>

        <p>
        	<img src="{{url('img/flyer.png')}}" width="100%">
        </p>

    @include('beautymail::templates.ark.contentEnd')

@stop