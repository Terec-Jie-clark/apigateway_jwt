<?php 

return  [
  'database1' => [
    'base_uri' => env('DATABASE1_SERVICE_BASE_URL'),
    'secret' => env('DATABASE1_SERVICE_SECRET')
  ],
  'database2' => [
    'base_uri' => env('DATABASE2_SERVICE_BASE_URL'),
    'secret' => env('DATABASE2_SERVICE_SECRET')
  ],
];