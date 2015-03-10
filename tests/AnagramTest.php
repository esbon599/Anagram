<?php

    require_once "src/Anagram.php";


    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        /*
        input: “a”, [“a”]
        output: [“a”]
        Spec: Insert a word and a separate list of words, find the anagrams
        */
        function test_findAnagram_oneLetter()
        {
            //arrange
            $test_Anagram = new Anagram();
            $input = "a";
            $input2 = ["a"];

            //act
            $result = $test_Anagram->findAnagram($input, $input2);

            //assert
            $this->assertEquals(["a"], $result);
        }

        /*
        input: “a”, [“a”, “b”, “a”]
        output: [“a”, "a"]
        Spec: Insert a single letter and a list of single letters, and then see which ones match.
        */
        function test_findAnagram_multipleEntries()
        {
            //arrange
            $test_Anagram = new Anagram();
            $input = "a";
            $input2 = ["a", "b", "a"];

            //act
            $result=$test_Anagram->findAnagram($input, $input2);

            //assert
            $this->assertEquals(["a","a"], $result);
        }

        /*
        input: “an”, [“nt”, “an”, “nf”]
        output: [“an”]
        Spec: Insert multiple letter words, and output exact matches in our list
        */
        function test_findAnagram_multipleWords()
        {
            //arrange
            $test_Anagram = new Anagram();
            $input = "an";
            $input2 = ["nt", "an", "nf"];

            //act
            $result=$test_Anagram->findAnagram($input, $input2);

            //assert
            $this->assertEquals(["an"], $result);
        }

        /*
        input: “an”, [“na”, “an”, “nf”]
        output: [“na”, “an”]
        Spec: Insert a multiple lettered word and a list of words, and output
        the words in the lists that have the exact same letters
        */
        function test_findAnagram_sameLetters()
        {
            //arrange
            $test_Anagram = new Anagram();
            $input = "an";
            $input2 = ["na", "an", "nf"];

            //act
            $result = $test_Anagram->findAnagram($input, $input2);

            //assert
            $this->assertEquals(["na","an"], $result);
        }

        /*
        input: “an”, [“gnat”, “hand”, “fan”, “test”]
        output: [“gnat”, “hand”, “fan”]
        Spec: Insert a single multiple lettered word and a list of words, and output the words in the list that contain all the letters in the single word
        */
        function test_findAnagram_partialMatches()
        {
            //arrange
            $test_Anagram = new Anagram();
            $input = "an";
            $input2 = ["gnat", "hand", "fan", "test"];

            //act
            $result = $test_Anagram->findAnagram($input, $input2);

            //assert
            $this->assertEquals(["gnat", "hand", "fan"], $result);
        }

        /*
        input: “an”, [“An”, “aN”, “AN”, “bt”]
        output: [“An”, “aN”, “AN”]
        Spec: input will match items in the list that are capitalized and return the capitalized value
        */
        function test_findAnagram_capitalized()
        {
            //arrange
            $test_Anagram = new Anagram();
            $input = "an";
            $input2 = ["An", "aN", "AN", "bt"];

            //act
            $result = $test_Anagram->findAnagram($input, $input2);

            //assert
            $this->assertEquals(["An", "aN", "AN"], $result);
        }

        /*
        input: "ann", ["ane", "anne"]
        output: ["anne"]
        Spec: words with repeating letters should not be matched with words that
        only have one of that letter
        */
        function test_findAnagram_duplicates()
        {
            //arrange
            $test_Anagram = new Anagram();
            $input = "ann";
            $input2 = ["ane", "anne"];

            //act
            $result = $test_Anagram->findAnagram($input, $input2);

            //assert
            $this->assertEquals(["anne"], $result);
        }

    }


 ?>
