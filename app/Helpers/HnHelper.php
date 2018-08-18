<?php

namespace App\Helpers;

use \GuzzleHttp\Client;

/*
 * Hacker News Helper
 * implementa ações sobre a Hacker News API
 * ref.: https://github.com/HackerNews/API
 */
class HnHelper
{

    public static $base = "https://hacker-news.firebaseio.com/v0/";

    public static function makeRequest($resource)
    {
        $client = new Client();
        $url = self::$base.$resource.".json?print=pretty";
        $request = $client->get($url);
        $response = json_decode( $request->getBody()->getContents() );
        return $response;
    }

    public static function getStoriesFromList($list, $limit=10)
    {
        $stories = collect([]);
        $contagem = 0;
        foreach( $list as $id ) {
            $item = self::getItem($id);
            if($item) {
                if($item->type == "story") {
                    $stories->push($item);
                    $contagem++;
                }
            }
            if($contagem >= $limit) break;
        }
        return $stories;
    }

    /**
     * Return a item based on $id param.
     * 
     * @param $id
     * @return null|json
     */
    public static function getItem($id)
    {
        $resource = "item/".$id;
        return self::makeRequest($resource);
    }

    public static function getTopStories($limit=10)
    {
        $resource = "topstories";
        $response = self::makeRequest($resource);
        $stories = self::getStoriesFromList($response, $limit);
        return $stories;
    }

    public static function getNewStories($limit=10)
    {
        $resource = "newstories";
        $response = self::makeRequest($resource);
        $stories = self::getStoriesFromList($response, $limit);
        return $stories;
    }

    public static function getBestStories($limit=10)
    {
        $resource = "beststories";
        $response = self::makeRequest($resource);
        $stories = self::getStoriesFromList($response, $limit);
        return $stories;
    }

    public static function getUserWithStories($id, $limit=10)
    {
        $resource = "user/".$id;
        $user = self::makeRequest($resource);
        if( $user ) {
            if ( $user->submitted )
                $user->stories = self::getStoriesFromList($user->submitted, $limit);
        }
        return $user;
    }
}