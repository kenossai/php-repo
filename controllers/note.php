<?php

$config = require 'config.php';

$db = new Database($config['database']);

$heading = "Notes";

$id = $_GET['id'];



$notes = $db->query('select * from notes where id = :id',['id' => $id])->fetchAll();


require "views/notes.view.php";
