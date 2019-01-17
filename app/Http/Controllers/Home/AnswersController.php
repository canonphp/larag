<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/12/11
 * Time: 15:10
 */

namespace App\Http\Controllers\Home;


use App\Http\Controllers\Controller;
use App\Models\Reply;
use App\Models\Answers;
use Illuminate\Http\Request;

class AnswersController extends Controller
{
    public function __construct()
    {
        $this->middleware('opera.auth')->except(['index','answersShow']);
    }


    public function index()
    {


        $answers = Answers::getAnswersAll();
        $count  = Answers::getAnswersCount();

        return view('home.answers.index')
            ->with(['answers'=>$answers,'count'=>$count]);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function answersStore(Request $request)
    {


        $data  = [
            'title' => $request->post('title'),
            'content' => $request->post('content'),
            'user_id'=>\Auth::id()
        ];

        $answers = Answers::create($data);
        if ($answers){
            return response()->json(['status'=>1,'msg'=>'发表成功']);
        }

        return response()->json(['status'=>0]);

    }


    public function answersShow(Answers $answers)
    {

        return view('home.answers.show')->with(['answers'=>$answers]);
    }




}