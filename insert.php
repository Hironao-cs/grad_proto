<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 1. POSTデータ取得
$user_type = $_POST["user_type"] ?? "";
$name      = $_POST["name"] ?? "";
$email  = $_POST["email"] ?? "";
$lpw_raw = $_POST["user_pw"] ?? ""; 
$user_pw = password_hash($lpw_raw, PASSWORD_DEFAULT);

// 教員フラグの判定
$teacher_flg = ($user_type === "教員") ? 1 : 0;

// 2. DB接続
// Local
// $db_name = "gs_db_graduationwork";
// $db_host = "localhost";
// $db_id   = "root";
// $db_pw   = ""; // XAMPP/Windowsなら空、MAMP/Macなら "root"
// サクラ
$db_name = "";
$db_host = "";
$db_id   = "";
$db_pw   = "";  


try {
    $pdo = new PDO('mysql:dbname='.$db_name.';charset=utf8;host='.$db_host, $db_id, $db_pw);
    // エラーモードを例外に設定（これでエラーが詳しく出ます）
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    exit('DB Connection Error: ' . $e->getMessage());
}

// 3. データ登録SQL作成
$sql = "INSERT INTO userinfo_table(user_type, name, email, user_pw, created_at, updated_at) 
        VALUES(:user_type, :name, :email, :user_pw, sysdate(), sysdate())";

try {
    $stmt = $pdo->prepare($sql);

    // 全て文字列（PARAM_STR）としてバインド
    $stmt->bindValue(':user_type',   $user_type,   PDO::PARAM_STR); 
    $stmt->bindValue(':name',        $name,        PDO::PARAM_STR);
    $stmt->bindValue(':email',     $email,     PDO::PARAM_STR);
    $stmt->bindValue(':user_pw',     $user_pw,     PDO::PARAM_STR);

    $status = $stmt->execute();
    
    // 成功したらログイン画面へ
    header("Location: login.php");
    exit;

} catch (PDOException $e) {
    // SQL実行エラー時に詳細を表示
    exit("SQLError: " . $e->getMessage());
}
?>