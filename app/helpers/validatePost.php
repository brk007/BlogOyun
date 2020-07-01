<?php

function validatePost($post){
    
    $errors= array();

    if(empty($post['title'])){
        array_push($errors,'Konu başlığı gerekiyor');
    }
    if(empty($post['body'])){
        array_push($errors,'Lütfen konu içerğini yazın');
    }
    if(empty($post['topic_id'])){
        array_push($errors,'Lütfen kategori seçiniz');
    }
    $existingPost=selectOne('posts',['title' => $post['title']]);
    
    
    return $errors;
}
