<?php

    namespace models;

    class climateModel{

        private $apiKey;
        private $endpoint;
        private $url;
        private $city;
        private $state;

        public static function imageTime($time){
            if($time == 0 || $time == 3){
                $timeImage = 'tempestade-forte.png';
                return $timeImage;
            }
            if($time == 1){
                $timeImage = 'tempestade-tropical.png';
                return $timeImage;
            }
            if($time == 4 ||  $time == 37 || $time == 47 || $time == 2 || $time == 'storm'){
                $timeImage = 'tempestades.png';
                return $timeImage;
            }
            if($time == 38 ||  $time == 39){
                $timeImage = 'trovoando.png';
                return $timeImage;
            }
            if($time == 5 || $time == 6 || $time == 35 || $time == 42){
                $timeImage = 'misto-neve-e-chuva.png';
                return $timeImage;
            }
            if($time == 7 || $time == 10 || $time == 16 || $time == 15 || $time == 43 || $time == 46 || $time =='snow' || $time == 'hail'){
                $timeImage = 'neve.png';
                return $timeImage;
            }
            if($time == 8 || $time == 13){
                $timeImage = 'neve-baixa.png';
                return $timeImage;
            }
            if($time == 9 || $time == 11 || $time == 12 || $time == 17 || $time == 18 || $time == 40 || $time == 45 || $time == 'rain'){
                $timeImage = 'chuva.png';
                return $timeImage;
            }
            if($time == 14 || $time == 41){
                $timeImage = 'tempestade-neve.png';
                return $timeImage;
            }
            if($time == 23 || $time == 24){
                $timeImage = 'ventania-noite.png';
                return $timeImage;
            }
            if($time == 26 || $time == 28 || $time == 29 || $time == 30 || $time == 'cloud' || $time == 'fog'){
                $timeImage = 'nublado.png';
                return $timeImage;
            }
            if($time == 27 || $time == 31 || $time == 32 || $time == 36 || $time == 'clear_day'){
                $timeImage = 'sol.png';
                return $timeImage;
            }
            if($time == 34 || $time == 44 || $time == 'cloudly_day'){
                $timeImage = 'nublado-sol.png';
                return $timeImage;
            }
            if($time == 33 || $time == 48 || $time == 'clear_night'){
                $timeImage = 'estrelado.png';
                return $timeImage;
            }
            if($time == 'cloudly_night'){
                $timeImage = 'nublado-noite.png';
                return $timeImage;
            }
        }

        public function __construct(){
            $this->apiKey = '61025a2a';
            $this->url = 'https://api.hgbrasil.com/weather';
        }
        
        public function climate(){
            $this->endpoint = '?key=';
            $this->apiKey = '61025a2a';
            $this->city = '&city_name='.$_SESSION['city'];
            $this->state = ','.$_SESSION['state'];
            $ch = curl_init($this->url . $this->endpoint . $this->apiKey . $this->city . $this->state);

            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            $response = json_decode(curl_exec($ch));

            curl_close($ch);

            return $response;
            
        }

    }

?>
