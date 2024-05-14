<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $users = User::all();
        return view('admin.post.add',compact('categories','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {

        if($request->hasFile('photo')){
            $fileName = $request->photo->getClientOriginalName();
            $request->photo->storeAs('public/images',$fileName);
        } else{
            $fileName = null;
        }
        $data = $request->all();
        $data['image'] = $fileName;

        try{
            $post = Post::create($data);
            return redirect()->route('post.index')->with('success','add thanh cong');
        }catch(\Throwable $th){
            return redirect()->back()->with('error','error'. $th->getMessage());
        }
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
    public function edit(Post $post)
    {
        $categories = Category::all();
        $users = User::all();
        return view('admin.post.edit',compact('post','categories','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostRequest $request, Post $post)
    {
        try {
            $data = $request->except('photo');

            // Check if a new photo file is uploaded
            if ($request->hasFile('photo')) {
                $fileName = $request->photo->getClientOriginalName();
                // Store the photo in the storage/app/public/images directory
                $request->photo->storeAs('public/images', $fileName);
                // Update the image attribute of the post with the new file name
                $data['image'] = $fileName;
            }

            $post->update($data);

            return redirect()->route('post.index')->with('success', 'Cập nhật thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Cập nhật thất bại: ' . $th->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index')->with('success', 'xóa thành công');
    }
}
