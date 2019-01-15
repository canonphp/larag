<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests\ReplyRequest;
use App\Models\Reply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReplyController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('opera.auth')->except(['index','replyShow']);
    }

    //

    public function index()
    {

    }




    public function replyStore(ReplyRequest $request)
    {

        $data = [
            'user_id'=> \Auth::id(),
            'answer_id'=> $request->post('answer_id'),
            'content'=> $request->post('content')
        ];

        $reply = Reply::create($data);
        if ($reply){
            return response()->json(['status'=>1,'msg'=>'回答成功']);
        }
        return response()->json(['status'=>0,'msg'=>'回答失败']);

    }


    public function replyShow(Reply $reply)
    {
       return view('home.answers.show')->with(['reply'=>$reply]);
    }



    public function delete(Reply $reply)
    {
        $reply->delete();
        return back();
    }


}
