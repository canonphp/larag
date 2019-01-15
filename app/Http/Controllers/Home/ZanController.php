<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Zan;
use Illuminate\Http\Request;

class ZanController extends Controller
{
    public function __construct()
    {
        $this->middleware('opera.auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function zans(Request $request)
    {
        $data = [
        'article_id'=>$request->post('article_id'),
        'user_id'=>\Auth::id()
        ];
        $hasZan = Zan::where('user_id','=',\Auth::id())
            ->where('article_id','=',$data['article_id'])
            ->count();

        if (!$hasZan){
            $zan = Zan::create($data);

            if ($zan){
                return response()->json(['status'=>1]);
            }
        }

        return response()->json(['status'=>0]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Zan  $zan
     * @return \Illuminate\Http\Response
     */
    public function show(Zan $zan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zan  $zan
     * @return \Illuminate\Http\Response
     */
    public function edit(Zan $zan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zan  $zan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zan $zan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zan  $zan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zan $zan)
    {
        //
    }
}
