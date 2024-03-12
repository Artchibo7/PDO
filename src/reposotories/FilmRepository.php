<?php

class FilmRepository {
    private $DB;

    public function __construct() {
        $db = new Database;
        $this->DB = $db->getDB();
    }

    public function getAllFilms() {
        $sql = "SELECT * FROM films;";

        $retour = $this->DB->query($sql)->fetchAll(PDO::FETCH_OBJ);

        return $retour;
    }
}
