<?php

/**
 * Class Form
 * Permet de gnérer un formulaire
 */

    class Form {

        private $data = array();
        public $surround = 'p';

        /**
         * @param int $data
         */
        public function __construct($data=array()){
            $this->data = $data;
        }

        private function surround($html){
            return "<{$this->surround}>{$html}</{$this->surround}>";
        }
        
        private function getValue($index){
            return isset($this->data[$index]) ? ($this->data[$index]) : null;
        }

        public function input($type,$name){
            return $this->surround(
                '<input type="'.$type.'" name="'.$name.'" value="'. $this->getValue($name) .'">'
            );
        }

        public function submit(){
            return $this->surround('<button type="submit">Envoyer</button>');
        }
    }