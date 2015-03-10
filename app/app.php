<?php

    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Anagram.php';

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__."/../views"));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.twig');
    });

    $app->post("/bananagram", function() use ($app) {

        $input_of_words = explode(" ", $_POST['list_of_words']);
        $input = $_POST['single_word'];

        $anagram = new Anagram();

        $result_array = $anagram->findAnagram($input, $input_of_words);

        return $app['twig']->render('result.twig', array('input_word' => $input, 'results' => $result_array));

    });


    return $app;


 ?>
