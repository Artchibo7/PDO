<?php

require "./src/classes/Database.php";
require "./src/reposotories/FilmRepository.php";

$db = new Database();
$FilmRepo = new FilmRepository;

var_dump($FilmRepo->getAllFilms());