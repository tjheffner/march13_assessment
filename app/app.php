<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/Counts.php";

  $app = new Silex\Application();
  $app['debug'] = true;

  $app->register(new Silex\Provider\TwigServiceProvider(), array(
      'twig.path' => __DIR__."/../views"
  ));

  $app->get("/", function() use($app) {
    return $app['twig']->render('input.twig');
  });

  $app->post("/results", function() use($app) {

    $count = new RepeatCounter;
    $input1 = $_POST['input1'];
    $input2 = $_POST['input2'];
    $wordcount = $count->countRepeats($input1, $input2);

    return $app['twig']->render('results.twig', array('matches' => $wordcount));
  });

  return $app;

 ?>
