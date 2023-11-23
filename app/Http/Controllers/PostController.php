<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function showPosts(){
        // $posts = DB::table("posts")
        // ->where("status","=","Active")
        // ->get();
        // $posts = DB::table("posts")
        // ->where("status","=","Active")
        // ->simplePaginate(4);
        $posts = DB::table("posts")
        ->where("status","=","Active")
        ->paginate(4);

        return view("allPosts", ["posts"=> $posts]);
    }

    public function singlePost(string $id){
        $post = DB::table("posts")
        ->where([
            ["post_id", "=", $id],
            ["status", "=", "Active"]
        ])
        ->get();
        return view("singlepost", ["post"=> $post]);
    }

    public function deletePost(string $id){
        $post = DB::table("posts")
        ->where("post_id", $id)
        ->update(["status" => "Delete"]);

        if($post){
            return redirect("/")
                    ->with('msg', "Delete Post with Post ID $id")
                    ->with("color","success");
        }
    }

    public function deleteAll(){
        $posts = DB::table("posts")
        ->truncate();

        
            return redirect("/")
                ->with('msg', 'Deleted All Posts');
        
    }

    public function addPost(Request $request){
        $post = DB::table('posts')
            ->insert([
                'title' => $request->title,
                'summary' => $request->summary,
                'description' => $request->description,
            ]);

            if($post){
                return redirect('/')
                    ->with('msg', 'Post Added Successfully')
                    ->with('color','success');
            }else{
                return redirect('/')
                ->with('msg', 'Post cannot be Added')
                ->with('color','danger');
            }
    }

    public function updatePage(string $id){
        $post = DB::table("posts")
        ->where([
            ["post_id", "=", $id],
            ["status", "=", "Active"]
        ])
        ->get();
        if ($post->count() > 0) {
            // Records exist
            // return $post;
            return view("updateUserForm", ["post"=> $post]);
        } else {
            // No records found, redirect to 404
            abort(404);
        }
        
    }
    public function updatePost(Request $request){
        $post = DB::table("posts")
            ->where('post_id', $request->post_id)
            ->update([
                'title'=> $request->title,
                'summary'=> $request->summary,
                'description'=> $request->description
            ]);
            if($post){
                return redirect('/')
                    ->with('msg', 'Post Updated Successfully')
                    ->with('color','success');
            }else{
                return redirect('/')
                    ->with('msg', 'Post Cannot be Updated')
                    ->with('color','danger');
            }
    }
}
