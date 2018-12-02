<?php

class BDD
{
    public function connexionBDD()
    {
    return new PDO('mysql:host=localhost;dbname=projet_3', 'root', '');
    }
}
