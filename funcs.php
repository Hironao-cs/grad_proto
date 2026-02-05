<!-- 関数登録ファイル -->

<?php
// XSS対策: エスケープ処理
function h($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

// DB接続関数
function db_conn() {
    try {
    // 【ローカル】
    // $db_name = "gs_db_graduationwork";
    // $db_host = "localhost";
    // $db_id   = "root";
    // $db_pw   = ""; // XAMPP/Windowsなら空、MAMP/Macなら "root"

    // 【さくらサーバー】
    $db_name = "";
    $db_host = "";
    $db_id   = "";
    $db_pw   = ""; // XAMPP/Windowsなら空、MAMP/Macなら "root"
    $pdo = new PDO('mysql:dbname='.$db_name.';charset=utf8;host='.$db_host, $db_id, $db_pw);
    return $pdo;
} catch (PDOException $e) {
    exit('DB Connection Error: ' . $e->getMessage());
}
}
//リダイレクト
function redirect($file_name)
{
    header('Location: ' . $file_name);
    exit();
}

//SQLエラー
function sql_error($stmt)
{
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit('SQLError:' . $error[2]);
}


function loginCheck(){
    // 1. セッション変数がない、または現在のIDと一致しない場合
    if (!isset($_SESSION['chk_ssid']) || $_SESSION['chk_ssid'] !== session_id()){
        exit('login.php');
    } 
        // 2. 一致した場合は、セキュリティのためにIDを新しくして同期し直す
    session_regenerate_id(true);
    $_SESSION['chk_ssid'] = session_id();

}
