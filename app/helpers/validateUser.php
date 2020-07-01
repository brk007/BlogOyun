<?php
function validateUser($user){
    
    $errors= array();

    if(empty($user['username'])){
        array_push($errors,'Kullanıcı adı gerekiyor');
    }
    if(empty($user['email'])){
        array_push($errors,'Email hesabı gerekiyor');
    }
    if(empty($user['password'])){
        array_push($errors,'Parola gerekiyor');
    }
    if(($user['passwordConf'] !== $user['password'])){
        array_push($errors,'Parola eşleşmiyor');
    }

    $existingUser=selectOne('users',['email' => $post['email']]);
    if(($existingPost)){
        if(isset($user['update-user']) && $existingPost['id'] !=$post['id']){
        array_push($errors,'Bu email kullanılıyor');
    }

    if(isset($user['create-admin'])){
        array_push($errors,'Bu email kullanılıyor');
    }
    }

    return $errors;
}





function validateLogin($user){
    
    $errors= array();

    if(empty($user['username'])){
        array_push($errors,'Kullanıcı adı gerekiyor');
    }
    if(empty($user['password'])){
        array_push($errors,'Parola gerekiyor');
    }
    return $errors;
}