<?php

namespace App\Repositories\post;
use App\Http\Requests\PostRequest;
use App\Models\medecin\Post;

class PostRepository implements PostInterfaceRepository
{
    public function index(){

    }
    public function createPost(PostRequest $request){
        $user = auth()->user();
        $postData = $request->validated();
        $postData['image'] = $request->file('image')->store('public/post', 'public');
        $postData['user_id'] = $user->id;
        return Post::create($postData);
    }
    public function findPost($id){
        return Post::findOrFail($id);
    }

    public function updatePost(PostRequest $request, $id)
    {
        $post = $this->findPost($id);

        // Validation des données du formulaire à l'aide de la classe PostRequest
        $validatedData = $request->validated();

        // Vérification de l'existence et de la validité du fichier image
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Stockage de la nouvelle image
            $imagePath = $request->file('image')->store('public/post', 'public');
            // Mise à jour du chemin de l'image dans les données du poste
            $validatedData['image'] = $imagePath;
        }

        // Mise à jour du poste avec les données validées
        $post->update($validatedData);
    }
   
    public function deletePost(Post $post){
        return $post->delete();
    }
}