<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Helpers\HnHelper;

class ApiController extends Controller
{
    /**
     * Returns the api version.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function index()
    {
        $data = ['version'=>'1.0', 'status'=>'active'];
        return response()->json( compact('data') );
    }

    /**
     * Returns item details.
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function item($id)
    {
        $response = HnHelper::getItem($id);
        return response()->json( $response );
    }

    /**
     * Returns new stories.
     *
     * @return \Illuminate\Http\Response
     */
    public function news()
    {
        $response = HnHelper::getNewStories();
        return response()->json( $response );
    }

    /**
     * Returns top stories.
     * 
     * @return \Illuminate\Http\Response
     */
    public function tops()
    {
        $response = HnHelper::getTopStories();
        return response()->json( $response );
    }

    /**
     * Returns best stories
     * 
     * @return \Illuminate\Http\Response
     */
    public function bests()
    {
        $response = HnHelper::getBestStories();
        return response()->json( $response );
    }

    /**
     * Returns user with stories
     * Based on user's unique username. Case-sensitive. Required.
     * 
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function user($id)
    {
        $response = HnHelper::getUserWithStories($id);
        return response()->json( $response );
    }

}
