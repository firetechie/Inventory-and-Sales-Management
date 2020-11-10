<?php
  define("DB_HOST", "localhost:3308");
  define("DB_USER", "root");
  define("DB_PASSWORD", "");
  define("DB_DATABASE", "inventory");

  $db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
?>