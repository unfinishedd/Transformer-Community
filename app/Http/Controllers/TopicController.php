<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function showTopic($topic) {
        return view('topic', ['topic' => $topic]);
    }
}





//namespace App\Http\Controllers;

//use Illuminate\Http\Request;

//class TopicController extends Controller
//{
    //public function showTopic($topic) {

        // Haal uit de database uit de table topics de topic met naam = $topic
        // $topicUitDB = .......
        //echo "Dit is de pagina van topic "  . $topic;
        //return view('Layout', ['topic' => $topicUitDB]);
    //}
//}
