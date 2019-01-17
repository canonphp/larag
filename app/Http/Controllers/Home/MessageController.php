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

    public function __construct()
    {
        $this->middleware('opera.auth')->except(['index']);
    }

    public function index()
    {
        $count  = Message::getMessageCount();
        $message = Message::getMessageAll();

        return view('home.message.index')->with(['count'=>$count,'messages'=>$message]);
    }

    public function MessageStore(Request $request)
    {
        $post = $request->post('desc');
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


    public function delete(Request $request)
    {
       $message = Message::findOrFail(intval($request->post('id')));
        $message->delete();
        if ($message->trashed()){
            return response()->json(['status'=>1]);
        }

        return response()->json(['status'=>0]);


    }


}