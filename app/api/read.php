<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    
    include_once '../../app/database/database.php';
    include_once '../../app/class/posts.php';

    $database = new Database();
    $db = $database->getConnection();

    $items = new posts($db);

    $stmt = $items->getPost();
    $itemCount = $stmt->rowCount();


    echo json_encode($itemCount);

    if($itemCount > 0){
        
        $postsArr = array();
        $postsArr["body"] = array();
        $postsArr["itemCount"] = $itemCount;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);

        $p = array(
            "id" =>  $id,
            "user_id" => $user_id,
            "topic_id" => $topic_id,
            "title" => $title,
            "image" => $image,
            "body" => $body,
            "published" => $published,
            "created_at" => $created_at,
            "steam" => $steam,
            "offical" => $offical

        );

        array_push($postsArr["body"], $p);
    }
    echo json_encode($postsArr);
}

else{
    http_response_code(404);
    echo json_encode(
        array("message" => "No record found.")
    );
}
?>