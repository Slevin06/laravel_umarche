<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeCycleTestController extends Controller
{
    public function showServiceContainerTest()
    {
        //サービスコンテナに登録してみる
        app()->bind('lifeCycleTest', function () {
            return 'ライフサイクルテスト';
        });

        //登録されているサービスを呼び出す
        $test = app()->make('lifeCycleTest');

        //サービスコンテナなしのパターン
//        $message = new Message();
//        $sample = new Sample($message);
//        $sample->run();

        //サービスコンテナありのパターン
        app()->bind('sample', Sample::class);
        $sample = app()->make('sample');
        $sample->run();

        dd($test, app());
    }
}

//依存関係

class Sample
{
    public $message;

    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    public function run()
    {
        $this->message->send();
    }
}

class Message
{
    public function send()
    {
        echo('メッセージ表示');
    }
}
