<?php

namespace App\Repositories\post;
use App\Http\Requests\PostRequest;
use App\Models\medecin\Post;

interface PostInterfaceRepository
{
    public function index();
    public function createPost(PostRequest $request);
    public function findPost($id);
    public function updatePost(PostRequest $request, $id);
    public function deletePost(Post $post);
}