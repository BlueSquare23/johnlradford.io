<?php
/* John's Handmade API
 * Handles the following tasks:
 * - Keep track of my location
 */
/* Debug
  ini_set('display_errors','1');
  ini_set('display_startup_errors','1');
  error_reporting (E_ALL);
*/

  // Read in API key hash from passwd file.
  $passwd_file = '.api_passwd';
  $passwd = fopen($passwd_file, "r") or die("Unable to open file!");
  $passwd_hash = str_replace("\n", "", fread($passwd, filesize($passwd_file)));
  fclose($passwd);

  // Check API key is supplied and valid.
  if (!isset($_SERVER['HTTP_X_API_KEY'])) {
    throw new Exception('API Key Required!');
  }
  if (!password_verify($_SERVER['HTTP_X_API_KEY'], $passwd_hash)) {
    throw new Exception('Invalid API Key!');
  }

  // Check is POST.
  if (strtoupper($_SERVER['REQUEST_METHOD']) != 'POST') {
    header("Location: /");
  }

  // Make sure Content-Type is application/json.
  $content_type = isset($_SERVER['CONTENT_TYPE']) ? $_SERVER['CONTENT_TYPE'] : '';
  if (stripos($content_type, 'application/json') === false) {
    throw new Exception('Content-Type must be application/json');
  }

  // Read the input stream.
  $data = file_get_contents("php://input");

  // Decode the JSON object.
  $object = json_decode($data, true);

  // Throw an exception if decoding failed.
  if (!is_array($object)) {
    throw new Exception('Failed to decode JSON object');
  }

  // Handles location
  if (isset($object['at_home'])) {
    $epoch_time = time();
    $log_data = ['timestamp' => $epoch_time];

    if ($object['at_home']) {
        $log_data['at_home'] = True;
    } else {
        $log_data['at_home'] = False;
    }

    $json_log_data = json_encode($log_data);
    $log_file = 'location.json';
    file_put_contents($log_file, $json_log_data . PHP_EOL, FILE_APPEND);

    header('Content-type: application/json');
    echo json_encode(array("Status"=>"Success"));
    return;
  }
  
  throw new Exception('Something\'s Gone Wrong!');
?>

