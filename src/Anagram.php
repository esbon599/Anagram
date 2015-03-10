<?php

    class Anagram
    {
        function findAnagram($input, $list_of_words)
        {
            $matched_array = array();
            foreach ($list_of_words as $word) {
                if ($word == $input) {
                    array_push($matched_array, $word);
                }
            }
            return $matched_array;
        }
    }

    ?>
