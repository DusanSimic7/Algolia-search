<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Http\Request;


class PostService
{

    public function __construct()
    {
            
    }


    public function create($request)
    {

        if(!$request->title){

            dd('nije vam dobra ruta');
            
        }

        $post = Post::create(['title' => $request->title]);

        dd('kreiran je post '.$post);  
    }



    public function delete($request)
    {
        $title = $request->title;
        
        if($title){

           $post = $this->findPost($title);

                if(!$post){
        
                    dd('ne postoji taj post');
        
                }
        
                $post->delete();
        
                dd("obrisan je post $title");
        }
    }

    public function findPost($title)
    {

            $keyword = $title;

            // Escapiranje specijalnih regex karaktera u ključnoj reči
            $escapedKeyword = preg_quote($keyword, '/');
        
            return Post::whereRaw("title REGEXP ?", ["[[:<:]]{$escapedKeyword}[[:>:]]"])->first();
            
    }
}