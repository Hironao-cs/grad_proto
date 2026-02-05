<?php
session_start();
require_once('funcs.php');
loginCheck(); // セキュリティチェック

// 1. POSTデータ取得
$user_id         = $_POST['user_id'] ?? "";
$status          = $_POST['status'] ?? "";
$organization    = $_POST['organization'] ?? "";
$department      = $_POST['department'] ?? "";
$graduation_year = $_POST['graduation_year'] ?? "";

// 2. DB接続
$pdo = db_conn();

// 3. データ登録SQL作成
// alumniinfo_table にデータを挿入します
$sql = "INSERT INTO alumniinfo_table(user_id, status, organization, department, graduation_year, created_at, updated_at) 
        VALUES(:user_id, :status, :organization, :department, :graduation_year, sysdate(), sysdate())";

try {
    $stmt = $pdo->prepare($sql);

    // バインド変数を設定
    $stmt->bindValue(':user_id',         $user_id,         PDO::PARAM_INT); // 数値なのでINT
    $stmt->bindValue(':status',          $status,          PDO::PARAM_STR); 
    $stmt->bindValue(':organization',    $organization,    PDO::PARAM_STR);
    $stmt->bindValue(':department',      $department,      PDO::PARAM_STR);
    $stmt->bindValue(':graduation_year', $graduation_year, PDO::PARAM_INT); // 数値なのでINT

    $status = $stmt->execute();

    // 4. データ登録処理後
    if ($status === false) {
        sql_error($stmt);
    } else {
        // 登録成功したら、卒業生用トップページへ！
        redirect('alumni_top.php');
    }

} catch (PDOException $e) {
    exit("SQLError: " . $e->getMessage());
}
?>