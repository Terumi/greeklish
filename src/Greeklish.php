<?php

    namespace ffy\greeklish;


    class Greeklish {

        private $lookout_table;

        public function __construct() {
            $this->lookout_table = [
                'α' => 'a',
                'ά' => 'a',
                'ε' => 'e',
                'έ' => 'e',
                'ι' => 'i',
                'ί' => 'i',
                'η' => 'i',
                'ή' => 'i',
                'υ' => 'y',
                'ύ' => 'y',
                'ο' => 'o',
                'ό' => 'o',
                'ω' => 'o',
                'ώ' => 'o',
                'β' => 'b',
                'γ' => 'g',
                'δ' => 'd',
                'ζ' => 'z',
                'θ' => 'th',
                'κ' => 'k',
                'λ' => 'l',
                'μ' => 'm',
                'ν' => 'n',
                'ξ' => 'x',
                'π' => 'p',
                'ρ' => 'r',
                'σ' => 's',
                'ς' => 's',
                'τ' => 't',
                'φ' => 'ph',
                'χ' => 'x',
                'ψ' => 'ps',
                ' ' => '-',
                '-' => '-'
            ];
        }

        private function mbStringToArray($string) {
            $strlen = mb_strlen($string);
            $array  = [];
            while ($strlen) {
                $array[] = mb_substr($string, 0, 1, "UTF-8");
                $string  = mb_substr($string, 1, $strlen, "UTF-8");
                $strlen  = mb_strlen($string);
            }

            return $array;
        }

        public function convert($string) {

            $string = mb_strtolower($string, 'utf8');


            $letter_array = $this->mbStringToArray($string);
            $letter_array = array_map(function ($letter) {
                if (!isset($this->lookout_table[$letter]))
                    return '';

                return $this->lookout_table[$letter];
            }, $letter_array);

            return implode("", $letter_array);
        }

    }