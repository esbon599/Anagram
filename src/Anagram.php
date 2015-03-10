<?php

    class Anagram
    {
        function findAnagram($input, $list_of_words)
        {
            $input_word_array = str_split($input);
            $matched_array = array();
            $tested = array();

            foreach ($list_of_words as $word) {

                $add_word = true;

                foreach($input_word_array as $key => $letter)
                {
                    if(strpos(strtolower($word), strtolower($letter)) === false)
                    {
                        $add_word = false;
                        break;
                    }
                    else {
                        array_push($tested, $letter);
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
