<?php
// PHP処理はそのまま
$user_type = $_POST['user_type'] ?? '';
$name      = $_POST['name'] ?? '';
$email     = $_POST['email'] ?? '';
$user_pw   = $_POST['user_pw'] ?? '';

if ($user_type== "" || $name == "" || $email == "" || $user_pw == "") {
    exit('未入力の項目があります。戻って入力してください。');
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録内容の確認 - いってら〜A高校〜</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        school: {
                            DEFAULT: '#b1284b',
                            dark: '#8a1f3a',
                        }
                    },
                    fontFamily: {
                        sans: ['"Helvetica Neue"', 'Arial', '"Hiragino Kaku Gothic ProN"', '"Hiragino Sans"', 'Meiryo', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="flex flex-col min-h-screen bg-gray-50 text-gray-800">

    <header class="bg-school text-white py-4 shadow-md sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4">
            <h1 class="text-xl font-bold tracking-wider">いってら〜A高校〜</h1>
        </div>
    </header>

    <main class="flex-grow flex items-center justify-center p-6">
        <div class="w-full max-w-3xl bg-white p-10 rounded-xl shadow-lg border border-gray-100">
            <h2 class="text-2xl font-bold text-center text-school mb-2">登録内容の確認</h2>
            <p class="text-center text-gray-500 mb-8 text-sm">以下の内容で間違いなければ登録ボタンを押してください。</p>
            
            <div class="overflow-hidden rounded-lg border border-gray-200 mb-8">
                <table class="w-full text-left border-collapse">
                    <tr class="border-b border-gray-200">
                        <th class="bg-gray-50 text-gray-700 font-bold p-4 w-1/3">所属</th>
                        <td class="p-4 text-gray-800"><?= htmlspecialchars($user_type, ENT_QUOTES) ?></td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <th class="bg-gray-50 text-gray-700 font-bold p-4">お名前</th>
                        <td class="p-4 text-gray-800"><?= htmlspecialchars($name, ENT_QUOTES) ?></td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <th class="bg-gray-50 text-gray-700 font-bold p-4">メールアドレス</th>
                        <td class="p-4 text-gray-800"><?= htmlspecialchars($email, ENT_QUOTES) ?></td>
                    </tr>
                    <tr class="border-b border-gray-200">
                        <th class="bg-gray-50 text-gray-700 font-bold p-4">パスワード</th>
                        <td class="p-4 text-gray-800">******** (セキュリティのため非表示)</td>
                    </tr>
                </table>
            </div>

            <form action="insert.php" method="post">
                <input type="hidden" name="user_type" value="<?= htmlspecialchars($user_type, ENT_QUOTES) ?>">
                <input type="hidden" name="name" value="<?= htmlspecialchars($name, ENT_QUOTES) ?>">
                <input type="hidden" name="email" value="<?= htmlspecialchars($email, ENT_QUOTES) ?>">
                <input type="hidden" name="user_pw" value="<?= htmlspecialchars($user_pw, ENT_QUOTES) ?>">

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button type="button" onclick="history.back()" 
                        class="text-center px-8 py-3 bg-gray-200 hover:bg-gray-300 text-gray-700 font-bold rounded-full transition-all">
                        修正する
                    </button>
                    <button type="submit" 
                        class="px-12 py-3 bg-gradient-to-r from-school to-school-dark text-white font-bold rounded-full shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all">
                        この内容で登録する
                    </button>
                </div>
            </form>
        </div>
    </main>

    <footer class="bg-school text-white text-center py-6 text-sm mt-auto">
        <div class="max-w-6xl mx-auto px-4">&copy; 2026 A高校 Official Store. All Rights Reserved.</div>
    </footer>
</body>
</html>