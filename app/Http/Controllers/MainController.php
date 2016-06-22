<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Snowfire\Beautymail\Beautymail;

use Mail;
use App\User;
use Cache;
use App;
use GeoIP;
use Lava;

class MainController extends Controller
{
   	public function getIndex(Request $request)
   	{
   		// $location = GeoIP::getLocation($request->ip());

 		$popularity = Cache::rememberForever('popularCountries', function()
	     {
        		$countries = User::pluck('country');

            	$uniqueCountries =  $countries->unique();

			$popularity = Lava::DataTable();

		    	$popularity->addStringColumn('Pays')
			     ->addNumberColumn('Popularité');

			$uniqueCountries->each(function($country) use ($countries, $popularity)
			{
				$filtered = $countries->filter(function ($item) use ($country)
				{
				    	return $item == $country;
				});

				$popularity->addRow(array($country, $filtered->count()));
			});

			return $popularity;

	        });

		$chart = Lava::GeoChart('Popularity', $popularity);

    		return view('home', compact('location'));
        }

    public function postRegister(Request $request)
    {
        if ( User::whereEmail( $request->input('email') )->first() )
        {
            return $response = ['success' => true, 'status' => 2];
        }

        $data = $request->all();

        $location = GeoIP::getLocation($request->ip());
       	$data['country'] = $location['country'];

        // if ( ! App::isLocal() )
        // {

            $data['titre'] = 'Signature Réussie!';

            $beautymail = app()->make(Beautymail::class);

            $beautymail->send('emails.welcome', $data, function($message) use ($data)
            {
                $message
                    ->from( config('site.email'), config('site.name') )
                    ->to( $data['email'], $data['firstname'] . ' ' . $data['lastname'] )
                    ->cc( config('site.email'), config('site.name') )
                    ->subject( $data['titre'])
                    ->replyTo( config('site.email') );
            });

            if (Mail::failures())
            {
               return $response = ['success' => false];
            }
        // }

         User::create($data);

         $count = User::count();

         Cache::forget('popularCountries');

         return $response = [
             'success' => true,
             'status' => 1,
             'count' => $count
         ];
    }

    public function getCount()
    {
        // $registered = User::count();
        return User::count();

        // $value = Cache::remember('users', 0, function()
        // {
        //     return User::count();
        // });
    }

    // public function getParticipants()
    // {
    //     $users = User::latest()->paginate(50);
    //     $title = 'Liste des participants';

    //     return view('users', compact('users', 'title'));
    // }

    // public function getSearch($name)
    // {
    //     return User::where('firstname', 'LIKE', "%$name%")
    //                 ->orWhere('lastname', 'LIKE', "%$name%")
    //                 ->take(10)
    //                 ->get();
    // }

    public function getIp(Request $request)
    {

    	$location = GeoIP::getLocation($request->ip());

    	return $location;
    }
}