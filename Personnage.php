<?php

    class Personnage // Présence du mot-clé class suivi du nom de la classe.
    {
        // Déclaration des attributs et méthodes ici.
        private $vie =80;
        private $atk = 20;
        private $nom; //on ne peut accéder à l'extérieur de la classe
        //protected $nom; //on ne peut y accéder que depuis les classes qui héritent de celle ci

        public function __construct($nom){
            $this->nom=$nom;
        }

        public function getNom(){
            return $this->nom;
        }
        public function getVie(){
            return $this->vie;
        }
        public function getAtk(){
            return $this->nom;
        }

        public function setNom($nom){
            $this->nom=$nom;
        }
        public function setVie($vie){
            $this->vie=$vie;
        }
        public function setAtk($atk){
            $this->atk=$atk;
        }

        public function regenerer($nbre_vie=null){
            isset($nbre_vie)?$this->vie+=$nbre_vie:$this->vie=100;
        }
        public function crier(){
            echo 'Alert';
        }
        public function mort(){
            ($this->vie <= 0) ? (var_dump($this->nom.' est mort')):(var_dump($this->nom.' a survécu avec'.$this->vie.' de vie'));
            // return $this->vie <=0;
        }
        public function attaque($cible){
            $cible->vie-=$this->atk;
        }

    }

?> 