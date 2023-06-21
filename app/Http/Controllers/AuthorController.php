<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use App\Services\AuthorService;
use Illuminate\Http\Request;
use App\Traits\ApiResponser; 

class AuthorController extends Controller
{
    use ApiResponser;

    
    public $authorservice;

    public function __construct(AuthorService $authorservice)
    {
        $this->authorservice = $authorservice;
        $this->middleware('auth:api', ['except' => ['login', 'refresh', 'logout', 'register']]);
    }


    // Index

    public function index()
    {
    return $this->successResponse($this -> authorservice -> obtainAuthors()); 
    }
    // add
    public function addData(Request $request ){
        return $this->successResponse($this->authorservice->createData($request->all()));
    
    }
    // get with id

    public function getWithId($authorId){
        return $this->successResponse($this->authorservice->showId($authorId));
    }

    // update 

    public function update(Request $request, $authorId){
        return $this->successResponse($this->authorservice->updateData($request->all(), $authorId));
    }

    // delete   

    public function delete($authorId){
        return $this->successResponse($this->authorservice->deleteData($authorId));
     
    }



}
