<?php

//   CONTROLLER -> THE MIDDLE MAN

namespace App\Http\Controllers;
use Illuminate\Http\Request; // <-- handling http request in lumen
use App\Traits\ApiResponser; // <-- use to standardized our code for api response
use App\Services\BookService;

class BookController extends Controller
{
    use ApiResponser;
     public $bookservice;

    public function __construct(BookService $bookservice)
    {
        $this->bookservice = $bookservice;
        $this->middleware('auth:api', ['except' => ['login', 'refresh', 'logout', 'register']]);
    }   
       // Index

    public function index(){
        return $this->successResponse($this->bookservice->obtainBooks());
    }

    // add data

    public function add(Request $request){
        return $this->successResponse($this->bookservice->addData($request->all()));
    }

    // get with id

    public function getWithId($bookId){
        return $this->successResponse($this->bookservice->showId($bookId));
    }

    public function update(Request $request, $bookId){
        return $this->successResponse($this->bookservice->updateData($request->all(), $bookId));
    }

    // update data

    public function delete($bookId){
        return $this->successResponse($this->bookservice->deleteData($bookId));
    }

 
}

