<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function Members() {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');

        //

        return Response::JSON(['message' => 'success']);
    }
}
