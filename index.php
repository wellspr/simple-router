<?php

require "autoload.php";

$app = new Route();

// Home page
$app -> setRoute("/", function($req, $res){
  $res -> render("views", [
    'title' => 'Home',
    'contentDirectory' => "content",
    'contentFileName' => "home"
  ]);
});

$app -> setRoute("/user/:id", function($req, $res){

  $id = $req -> params('id');

  if($id=='get_params'){

    $req_uri = $req->get_request_uri();
    $params = Request :: get_query_params($req_uri);

    if(isset($params['title'])){
      $title = $params['title'];
    }else{
      $title = "Get User Params";
    }

    if(isset($params['file_name'])){
      $file_name = $params['file_name'];
    }else{
      $file_name = 'get_params';
    }

    if(isset($params['dir_name'])){
      $dir_name = $params['dir_name'];
    }else{
      $dir_name = 'user';
    }

    $res -> render("views", [
      'title' => "$title",
      'contentDirectory' => "$dir_name",
      'contentFileName' => "$file_name"
    ]);
  }
});


$app -> setRoute("/teste/:id1/:id2/:id3", function($req, $res){

  $id1 = $req -> params('id1');
  $id2 = $req -> params('id2');
  $id3 = $req -> params('id3');

  if($id1==='1'&$id2==='2'&$id3==='3'){
    $res->send("Hello!");
  }
  else if($id1==='4'&$id2==='5'&$id3==='6'){
    $res->send("Good bye!");
  }
  else{
    echo 'id1 = ' . $id1 . '<br>';
    echo 'id2 = ' . $id2 . '<br>';
    echo 'id3 = ' . $id3 . '<br>';
  }
});
