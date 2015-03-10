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
        output: [“a”]
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
        input: “an”, [“na”, “an”, “nf”]
        output: [“an”]
        Spec: Insert multiple letter words, and output exact matches in our list
        */
        function test_findAnagram_multipleWords()
        {
            //arrange
            $test_Anagram = new Anagram();
            $input = "an";
            $input2 = ["na", "an", "nf"];

            //act
            $result=$test_Anagram->findAnagram($input, $input2);

            //assert
            $this->assertEquals(["an"], $result);
        }

        /*
        input: “an”, [“na”, “an”, “nf”]
        output: [“na”, “an”]
        Spec: Insert a multiple lettered word and a list of words, and output the words in the lists that have the exact same letters
        */
        
    }


 ?>
