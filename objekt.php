<?php

class Student{
    private $ime;
    private $starost;

    public function __construct($params){
        if(isset($params['ime'])){
            $this->ime=$params['ime'];
        }
        if(isset($params['starost'])){
            $this->starost=$params['starost'];
        }
        // foreach ($params as $index => $vrednost) {
        //     $this->index=$vrednost;
        // }
    }

    public function get_ime(){
        return $this->ime;
    }
    public function get_starost(){
        return $this->starost;
    }
    public function pozdrav(){
        return "Zdravo ja sam " . $this->ime . " i imam " . $this->starost . " godina.";
    }
    public function set_ime($novo_ime){//validacija
        if(strlower(trim($novo_ime))=='radoslav'){
            echo "a necu da se zovem radoslav...";
        }
        $this->ime=$novo_ime;
        echo "rename-ovao sam se";
    }
}

$pera = new Student([
                    "ime"=>"Mihailo",
                    "starost"=>22
                ]);
echo $pera->pozdrav();


?>