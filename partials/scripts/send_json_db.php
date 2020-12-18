<?php
/**
 * return a json
 * the database is filtered based on the select value in index
 */

require_once __DIR__ . '/../database.php';
// get the author to filter from _GET global var
$author = $_GET['author'];

// setting the output type
header('Content-Type: application/json');

/**
 * Author check
 * - 'All' -> return the whole database
 * - 'other authors' -> return a new filtered db
 */
if($author === 'All') {
  echo json_encode($database);
} else {
  $filtered = [];
  foreach($database as $cd) {
    if($cd['author'] === $author) {
      $filtered[] = $cd;
    }
  }
  echo json_encode($filtered);
}