<?php

namespace App\Http\Controllers\medecin\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\medecin\Post;
use App\Repositories\post\PostInterfaceRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    protected $postRepository ;

    public function __construct(PostInterfaceRepository $postInterfaceRepository)
    {
        $this->postRepository = $postInterfaceRepository;
    }

    public function index()
    {
        $utilisateur = auth()->user();
        $posts = Post::where('user_id', $utilisateur->id)->get();
        return view('medecin/dashboard/post/index', compact('posts'));
    }

    public function create()
    {
        return view('medecin/dashboard/post/create');
    }

    public function store(PostRequest $postRequest)
    {
        $this->postRepository->createPost($postRequest);
        return redirect()->route('dashboard_medecin')->with('seccess', 'Votre poste a bien enregistre');
    }

    public function edit($id)
    {
        $post = $this->postRepository->findPost($id);
        // if(!Gate::allows('modifier-poste', $post)){
        //     abort(403);
        // }
        Gate::authorize('modifier-poste', $post);
        return view('medecin/dashboard/post/edit', ['post' => $post]);
    }

    public function update(PostRequest $postRequest, $id)
    {
        $this->postRepository->updatePost($postRequest, $id);
        return redirect()->route('dashboard_medecin')->with('seccess', 'Votre poste a bien enregistre');
    }


    public function destroy(Post $post)
    {
        Gate::authorize('suprimer-poste', $post);
        $this->postRepository->deletePost($post);
        return redirect()->route('dashboard_medecin');
    }
}
