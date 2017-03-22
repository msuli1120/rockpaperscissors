<?php
  date_default_timezone_set('America/Los_Angeles');
  require_once __DIR__.'/../vendor/autoload.php';
  require_once __DIR__.'/../src/Play.php';

  $app = new Silex\Application();

  $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
  ));

  $app->get("/", function() use ($app) {
    return $app['twig']->render('index.html.twig');
  });

  $app->post("/play", function() use ($app) {
      $new_game = new Play;
      $result = $new_game->playGame($_POST['player1'],$_POST['player2']);

      return $app['twig']->render('index.html.twig', array('result'=>$result));
  });

  $app->post("/playpc", function() use ($app) {
    $pc_game = new Play;
    $auto = $pc_game->playPC($_POST['player1']);

    return $app['twig']->render('index.html.twig', array('auto'=>$auto));
  });


  return $app;
?>
