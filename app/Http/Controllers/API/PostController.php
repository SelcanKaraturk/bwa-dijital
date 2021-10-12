<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        try {
            $client = new Client();
            $request = $client->get('https://jsonplaceholder.typicode.com/posts');
            return response()->json([
                'success' => true,
                'posts' => json_decode($request->getBody())
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'error' => $exception->getMessage()
            ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show($id)
    {
        try {
            $client = new Client();
            $request = $client->get('https://jsonplaceholder.typicode.com/posts/' . $id);
            return response()->json([
                'success' => true,
                'posts' => json_decode($request->getBody())
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'error' => $exception->getMessage()
            ]);
        }
    }


}
