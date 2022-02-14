<?php

require_once 'SimpleOrm.class.php';

class Articles extends SimpleOrm {
    public $id;
    public $ref;
    public $titre;
    public $description;
    public $prix;
}

?>