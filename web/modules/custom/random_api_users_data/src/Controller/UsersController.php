<?php

namespace Drupal\random_api_users_data\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller file to fetch and passed data from API to template file.
 */
class UsersController extends ControllerBase {

  /**
   * Main index function.
   */
  public function index() {
    // Get Users list.
    $users = $this->getUsersFromApi();
    return [
      '#theme' => 'random_api_users_data_template',
      '#attached' => [
        'library' => ['random_api_users_data/random-api-users-data-libraries'],
      ],
      '#users' => $users,
    ];
  }

  /**
   * Custom function to fetch data from API.
   */
  public function getUsersFromApi() {
    // User Limit.
    $user_limit = 100;
    // Curl request for get users list.
    $curl = curl_init();
    curl_setopt_array(
      $curl, [
        CURLOPT_URL => 'https://randomuser.me/api/?results=' . $user_limit,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
      ]
    );
    $response = curl_exec($curl);
    curl_close($curl);
    // Convert Json data into array object.
    $response = json_decode($response);
    return $response;
  }

}
