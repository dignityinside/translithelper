<?php

    namespace Dignity;

    /**
     * Translit helper class
     *
     * @author Alexander Schilling <dignityinside@gmail.com>
     */
    class TranslitHelper {

        /**
         * Translate russian to latin letters
         *
         * @param string $content Text
         *
         * @return string
         */
        public static function translit($content) {

            $matrix = [
                "А" => "a", "Б" => "b", "В" => "v", "Г" => "g", "Д" => "d",
                "Е" => "e", "Ё" => "jo", "Ж" => "zh",
                "З" => "z", "И" => "i", "Й" => "j", "К" => "k", "Л" => "l",
                "М" => "m", "Н" => "n", "О" => "o", "П" => "p", "Р" => "r",
                "С" => "s", "Т" => "t", "У" => "u", "Ф" => "f", "Х" => "h",
                "Ц" => "c", "Ч" => "ch", "Ш" => "sh", "Щ" => "shh", "Ъ" => "",
                "Ы" => "y", "Ь" => "", "Э" => "e", "Ю" => "ju", "Я" => "ja",
                "а" => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d",
                "е" => "e", "ё" => "jo", "ж" => "zh",
                "з" => "z", "и" => "i", "й" => "j", "к" => "k", "л" => "l",
                "м" => "m", "н" => "n", "о" => "o", "п" => "p", "р" => "r",
                "с" => "s", "т" => "t", "у" => "u", "ф" => "f", "х" => "h",
                "ц" => "c", "ч" => "ch", "ш" => "sh", "щ" => "shh", "ъ" => "",
                "ы" => "y", "ь" => "", "э" => "e", "ю" => "ju", "я" => "ja",
                "«" => "", "»" => "", "—" => "-", "`" => "", " " => "-",
                "[" => "", "]" => "", "{" => "", "}" => "", "<" => "", ">" => "",
                "?" => "", "," => "", "*" => "", "%" => "", "$" => "",
                "@" => "", "!" => "", ";" => "", ":" => "", "^" => "", "\"" => "",
                "&" => "", "=" => "", "№" => "", "\\" => "", "/" => "", "#" => "",
                "(" => "", ")" => "", "~" => "", "|" => "", "+" => "", "”" => "", "“" => "",
                "'" => "",
                "’" => "",
                "–" => "-",
                "™" => "tm",
                "©" => "c",
                "®" => "r",
                "…" => "",
                "„" => "",
                "." => "-",
            ];

            $content = strtr($content, $matrix);
            $content = htmlentities($content);
            $content = strtr(trim($content), $matrix);
            $content = str_replace('---', '-', $content);
            $content = str_replace('--', '-', $content);
            $content = strtolower($content);

            return $content;

        }

    }
