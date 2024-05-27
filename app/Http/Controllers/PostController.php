<?php

namespace App\Http\Controllers;

use App\Services\PostService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{

        /**
     * @param PostService $employeeService
     * @param Request $request
     * @return JsonResponse
     */

    public function create(PostService $postService, Request $request)
    {
        // stavi parametar ovako  http://127.0.0.1:8000/create?title=ovde dodaj title za insert
        // ovde bih inace svuda stavio try catch block
        $post = $postService->create($request);

        
        return $post;
    }   



    public function delete(PostService $postService, Request $request)
    {
        // stavi parametar ovako  http://127.0.0.1:8000/delete?title=ovde ide sta hoces da brises

       return $postService->delete($request);
      
    }
}