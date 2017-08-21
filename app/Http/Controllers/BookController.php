<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Illuminate\Support\Facades\Input;

class BookController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | route (/book/)
    |--------------------------------------------------------------------------
    */
    public function index()
    {
        $client = \Elasticsearch\ClientBuilder::create()->build();
//        $books =  Book::all();
//        $this->saveInElasticSearch($books, $client);
        $field = ["name" => "IV"];
        $res = $this->searchBy(json_encode($field));
        $res = $client->search($res);
        $books = $res['hits']['hits'];
        return view('book.index', compact('books'));
    }


    /*
    |--------------------------------------------------------------------------
    | route (/book/search)
    |--------------------------------------------------------------------------
    */
    public function search()
    {
        $client = \Elasticsearch\ClientBuilder::create()->build();
        $ff = Input::get('search');
        if (!$ff) {
            $books = array();
            return view('book.index', compact('books'));
        }

//        $field = ["name" => $ff];
//        $res = $this->searchBy(json_encode($field));
        $queryString =  ' "query_string" : {
                          "query" : "description:Qus~",
                          "fields":["name","description"
                           ] }';


        $res = $this->searchQueryString($queryString);
        $res = $client->search($res);

        $books = $res['hits']['hits'];
        var_dump($books); die;
        return view('book.index', compact('books'));
    }


    /*
    |--------------------------------------------------------------------------
    | searchBy
    |--------------------------------------------------------------------------
    |
    | search by field
    |
    */
    public function searchBy($match)
    {
        $json = '{
            "query" : {
                "match" : ' . $match . '
            }
         }';
        $params = [
            'index' => 'ahmed',
            'type' => 'books',
            'body' => $json
        ];

        return $params;
    }


    /*
    |--------------------------------------------------------------------------
    | search all
    |--------------------------------------------------------------------------
    |
    | get all
    |
    */
    public function searchQueryString($query_string)
    {
        $json = '{
            "query" : {'.$query_string.'
            }
         }';
        $params = [
            'index' => 'ahmed',
            'type' => 'books',
            'body' => $json
        ];

        return $params;
    }

    /*
    |--------------------------------------------------------------------------
    | saveInElasticSearch
    |--------------------------------------------------------------------------
    |
    | save the data in elastic search server
    |
    */
    function saveInElasticSearch($books, $client)
    {
        $total = count($books);
        for ($i = 0; $i < $total; $i++) {
            $params['body'][] = [
                "index" => [
                    "_index" => "ahmed",
                    "_type" => "books",
                    "_id" => $books[$i]->id
                ]
            ];
            $params['body'][] = $books[$i]->toArray();
        }

        if (!empty($params['body'])) {
            $response = $client->bulk($params);
            var_dump("all completed");
        }
    }
}
