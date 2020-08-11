<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostImage;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\PostPhoto;
use App\User;
use Illuminate\Support\Facades\DB;

class PostImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_post = PostImage::all();
        $data_post2 = PostPhoto::all();
        //var_dump($data_post);
        return view('post_image',compact('data_post','data_post2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'desc_image' => ['required', 'min:3'],
            'photo' => ['required'],
            //  'photo.*' => ['mimes:jpeg, png']

        ]);

        $post = $request->user()->PostImages()->create($request->except('photo'));

        $postPhotos = [];
        $post_image = PostImage::findOrFail($post->id);
        foreach($request->file('photo') as $file){
            $path = Storage::disk('public')->putFile('post',$file);
            $postPhotos[]=[
                "post_image_id" => $post->id,
                "path" => $path
            ];
            $update = DB::table('post_images')
              ->where('id',$post->id )
              ->update(['path_image' => $path]);
        }
        // $post->photos()->insert($postPhotos);
        return redirect()->route('postimage.index');
    }

    public function addLike($id,$like_image){
        $update = DB::table('post_images')
              ->where('id',$id )
              ->update(['like_image' => intval($like_image)+1]);

        return redirect()->route('postimage.index');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = PostImage::findOrFail($id);
        return view('edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'desc_image' => ['required', 'min:3'],
            //  'photo.*' => ['mimes:jpeg, png']
        ]);
        
        $postPhotos = [];
        if(empty($request->file('photo'))){
            $update = DB::table('post_images')
                    ->where('id',$id )
                    ->update([
                        'desc_image' => $request->input('desc_image')]);
        }else{
            foreach($request->file('photo') as $file){
                $path = Storage::disk('public')->putFile('post',$file);
                    $update = DB::table('post_images')
                    ->where('id',$id )
                    ->update([
                        'desc_image' => $request->input('desc_image'),
                        'path_image' => $path]);
            }
        }

        return redirect()->route('postimage.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $postPhotos = PostImage::findOrFail($id);
        Storage::delete('public/'.$postPhotos->path_image);
        $postPhotos->delete();
        return redirect()->route('postimage.index');
    }
}