<?php
    // コントローラ
    // 外部ファイルの読みこみ
    require_once 'User.php';
    session_start();
    $new_user = $_SESSION['new_user'];
    // var_dump($new_user);
    $_SESSION['new_user'] = null;
    
    // 森田さん誕生(オブジェクト、インスタンス)
    $morita = new User('森田', 24);
    // 島さん誕生
    $shima = new User('島', 20);
    // 森田さん、お酒を飲む
    // $morita->drink();
    // 島さん、お酒を飲む
    // $shima->drink();
    // 森田さんが島さんに話しかける
    // $morita->talk($shima);
    // 島さんが森田さんに話しかける
    // $shima->talk($morita);
    
    // ユーザー一覧を保存する配列
    $users = [];
    
    if($new_user !== null){
        array_push($users, $new_user);
    }
    // 配列に森田さん追加
    array_push($users, $morita);
    // var_dump($users);
    // 配列に島さん追加
    array_push($users, $shima);
    // var_dump($users);
    // 山田さん配列に追加
    array_push($users, new User('山田', 100));
    // var_dump($users);
    
    // ユーザー一覧から一人ずつ取り出す
    // foreach($users as $user){
    //     print $user->name . PHP_EOL;
    //     print $user->age . '歳' . PHP_EOL;
    // }
    
    // HTMLファイルを表示
    include_once 'index_view.php';
?>