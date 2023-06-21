<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;

class AuthorService{
use ConsumesExternalService;
  /**
   * The base uri to consume the User1 Service
   * @var string
   */
  public $baseUri;
  public $secret;

  public function __construct(){
    $this->baseUri = config('services.database1.base_uri');
    $this->secret = config('services.database1.secret');

  }

 


  // methods

  public function obtainAuthors(){
    return $this->performRequest('GET','/authors'); 
  }
  // add

  public function createData($data){
    return $this->performRequest('POST', '/authors', $data);
  }

  // get with id

  public function showId($id){
    return $this->performRequest('GET', "/authors/{$id}");
  }

  // update  data

  public function updateData($data, $id){
    return $this->performRequest('PUT', "/authors/{$id}", $data);
  }

  // delete data

  public function deleteData($id){
    return $this->performRequest('DELETE', "/authors/{$id}");
  }

}