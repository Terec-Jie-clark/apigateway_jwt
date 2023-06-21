<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;

class BookService{
use ConsumesExternalService;
  /**
   * The base uri to consume the User1 Service
   * @var string
   */
  public $baseUri;
  public $secret;

  public function __construct(){
    
      $this->baseUri = config('services.database2.base_uri');
      $this->secret = config('services.database2.secret');
  }

  // methods

  // get all data
  public function obtainBooks(){
    return $this->performRequest('GET', '/book');
  }

  // add data

  public function addData($data){
    return $this->performRequest('POST', '/book', $data);
  }

  // show data with id

  public function showId($bookId){
    return $this->performRequest('GET', "/book/{$bookId}");
  }

  // update data  

  public function updateData($data, $bookId){
    return $this->performRequest('PUT', "/book/{$bookId}", $data);
  }

  // delete data

  public function deleteData($bookId){
    return $this->performRequest('DELETE', "/book/{$bookId}");
  }

}