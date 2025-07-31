<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Geocoder\Query\GeocodeQuery;
use Geocoder\Provider\Nominatim\Nominatim;
use Http\Adapter\Guzzle7\Client as GuzzleAdapter;


class LocationController extends Controller
{

    public function search(Request $request)
    {
        $httpClient = new GuzzleAdapter();
        $provider = Nominatim::withOpenStreetMapServer($httpClient, 'MyApp/1.0');
        $geocoder = new \Geocoder\StatefulGeocoder($provider, 'en');

        $query = $request->get('q');
        $results = $geocoder->geocodeQuery(GeocodeQuery::create($query));

        $suggestions = [];
        foreach ($results as $address) {
            $suggestions[] = $address->getLocality() ?? $address->getAdminLevels()->first()->getName() ?? $address->getCountry()->getName();

        }

        return response()->json($suggestions);
    }

}
