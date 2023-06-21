<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser {

  public function successResponse($data, $code = Response::HTTP_OK){
    // return response()->json(['data' => $data, 'site1' => 1], $code);
    return response($data, $code )->header('Content-Type', 'application/json');  

  }
  
  // New
  public function validResponse($data, $code = Response::HTTP_OK){

    return response()->json(['data' => $data], $code);

  }
  // error response generated by api gateway itself
  public function errorResponse($message, $code)
  {

    return response()->json(['error' => $message, 'code' => $code], $code);
    
  }

  // error message generated by the api site
  public function errorMessage($message, $code){
    return response($message, $code)->header('Content-Type', 'application/json');  
  }
}

