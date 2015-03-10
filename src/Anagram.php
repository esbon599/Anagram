<?php

    class Anagram
    {
        function findAnagram($input, $list_of_words)
        {
            $input_word_array = str_split($input);
            $matched_array = array();

            foreach ($list_of_words as $word) {

                $add_word = true;

                foreach($input_word_array as $letter)
                {
                    if(strpos($word, $letter) === false)
                    {
                        $add_word = false;
                        break;
                    }
                }

                if($add_word) {
                    array_push($matched_array, $word);
                }

            }
            return $matched_array;
        }
    }

    ?>
