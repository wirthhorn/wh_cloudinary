<?php

namespace Drupal\wh_cloudinary;

/**
 * Class DefaultService.
 */
class DefaultService {

  /**
   * Constructs a new DefaultService object.
   */
  public function __construct() {

  }

  //read the cloudinary-config setting
  //return false, if not set
  public function getCloudinaryDir(){
    $cloudinary_stream_wrapper_folders= \Drupal::config('cloudinary_sdk.settings')->get('cloudinary_stream_wrapper_folders');

    //filter array - get checked setting
    $cloudinary_stream_wrapper_folders = array_filter($cloudinary_stream_wrapper_folders, function($n){ 
        return $n !== 0;
    });

    //return first key of array
    return reset($cloudinary_stream_wrapper_folders);
  }

}
