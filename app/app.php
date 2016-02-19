<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig', array(
            'form' => true,
            'cheeseform' => true
        ));
    });

    $app->get("/result", function() use ($app) {
        $new_counter = new RepeatCounter;
        $result = $new_counter->CountRepeats($_GET['input'], $_GET['string']);
        return $app['twig']->render('index.html.twig', array(
            'result' => array(
                'text' => $result
            )
        ));
    });

    $app->get("/cheese", function() use ($app) {
        return $app['twig']->render('index.html.twig', array(
            'cheese' => true
        ));
    });

    return $app;
?>
