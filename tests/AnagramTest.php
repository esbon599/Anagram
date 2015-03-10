<?php

    require_once "src/Anagram.php";


    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_findAnagram_oneLetter()
        {
            //arrange
            $test_Anagram = new Anagram();
            $input = "a";
            $input2 = ["a"];

            //act
            $result = $test_Anagram->findAnagram($input, $input2);

            $array =

            //assert
            $this->assertEquals(["a"], $result);
        }
    }


 ?>
