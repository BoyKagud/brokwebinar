<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostsController extends Controller
{
	public function getPosts()
	{
		$posts = Post::
		select("users.name", "posts.content", "posts.created_at")
		->join('users', 'users.id', '=', 'posts.user_id')
		->get();

		return response()->json([
			"posts"	=>	$posts
		], 200);
	}

	public function createPost(Request $request)
	{
		$newPost = Post::create($request->all());
		return response()->json($newPost, 200);
	}

	public function update(Request $request, $post_id)
	{
		$record = Post::find($post_id);
		$record->update($request->all());
		return response()->json($record, 200);
	}

	public function delete($post_id)
	{
		$record = Post::find($post_id);
		$record->delete();
		return response()->json(null, 201);
	}
}
