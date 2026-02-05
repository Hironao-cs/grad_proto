<?php

session_start(); // ← sessionを利用するので忘れない！

//POST値
$email   = $_POST['email'] ?? "";
$user_pw   = $_POST["user_pw"] ?? "";

//1.  DB接続します
require_once('funcs.php');
$pdo = db_conn();

// 2. データ登録SQL作成
$sql = "SELECT u.*, a.id AS detail_id 
        FROM userinfo_table AS u 
        LEFT JOIN alumniinfo_table AS a ON u.id = a.user_id 
        WHERE u.email = :email";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$status = $stmt->execute();
//3. SQL実行時にエラーがある場合STOP
if($status === false){
    sql_error($stmt);
}

//4. 抽出データ数を取得
$val = $stmt->fetch();


// 5. 判定 (ハッシュ化パスワードの検証)
if($val && password_verify($user_pw, $val['user_pw'])){
    // Login成功時
    session_regenerate_id(true);
    $_SESSION['chk_ssid'] = session_id();
    $_SESSION['user_id']   = $val['id'];
    $_SESSION['name']     = $val['name'];
    $_SESSION['user_type']     = $val['user_type']; // DBのカラム名が「role」の場合

    // 属性（role）に応じて遷移先を振り分ける
    if ($_SESSION['user_type'] === '教員') {
        redirect('teacher_top.php');
    } else if ($_SESSION['user_type'] === '卒業生') {
        if (empty($val['detail_id'])) {
            redirect('alumni_info.php');
        } else {
            redirect('alumni_top.php');
        } 
    }
} else {
    // Login失敗時
    redirect('login.php');
}


?>



