<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/12/11
 * Time: 15:13
 */

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $count  = Message::getMessageCount();
        $message = Message::getMessageAll();

        return view('home.message.index')->with(['count'=>$count,'messages'=>$message]);
    }

    public function MessageStore(Request $request)
    {
        $post = $request->post('desc');
        if (!\Auth::check()){
            return response()->json(['status'=>-1,'msg'=>'请登录，再留言！！！']);
        }
        $data = [
            'user_id'=>\Auth::user()->id,
            'content'=>$post,
            'state'=>1
        ];
        $massage = Message::create($data);
        if($massage){
            return  response()->json(['status'=>1,'msg'=>'留言成功','data'=>$data]);
        }

        return  response()->json(['status'=>0,'msg'=>'留言信息不能为空哦']);

    }


    public function delete(Comment $comment)
    {
        $comment->delete();
        return back();
    }


}