<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>いってら会員登録フォーム</title>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="flex flex-col min-h-screen bg-gray-50 text-gray-800">

    <header class="bg-school text-white py-4 shadow-md sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4">
            <h1 class="text-xl font-bold tracking-wider">いってら〜A高校〜</h1>
        </div>
    </header>

    <main class="flex-grow flex items-center justify-center p-6">
        <div class="w-full max-w-md bg-white p-10 rounded-xl shadow-lg border border-gray-100">
            <h3 class="text-2xl font-bold text-center text-school mb-8">会員登録フォーム</h3>
        
            <form action="post_confirm.php" method="post" class="space-y-6">
                
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        所属 <span class="ml-2 bg-school text-white text-xs px-2 py-0.5 rounded">必須</span>
                    </label>
                    <select name="user_type" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-school focus:border-school outline-none bg-white transition-all">
                        <option value="">所属を選択してください</option>
                        <?php
                            $types = ["教員", "卒業生"];
                            foreach($types as $type){
                                echo "<option value='{$type}'>{$type}</option>";
                            }
                        ?>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        お名前 <span class="ml-2 bg-school text-white text-xs px-2 py-0.5 rounded">必須</span>
                    </label>
                    <input type="text" name="name" placeholder="山田　太郎" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-school focus:border-school outline-none transition-all">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        メールアドレス <span class="ml-2 bg-school text-white text-xs px-2 py-0.5 rounded">必須</span>
                    </label>
                    <input type="email" name="email" placeholder="xxx@example.com" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-school focus:border-school outline-none transition-all">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        パスワード <span class="ml-2 bg-school text-white text-xs px-2 py-0.5 rounded">必須</span>
                    </label>
                    <input type="password" name="user_pw" placeholder="半角英字と数字を組み合わせてください" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-school focus:border-school outline-none transition-all">
                </div>

                <button type="submit" 
                    class="w-full bg-school hover:bg-school-dark text-white font-bold py-3 rounded-lg shadow-md transition-all transform active:scale-[0.98]">
                    内容を確認して送信
                </button>
            </form>

            <div class="text-center mt-8 text-sm">
                <p class="text-gray-500">すでにアカウントをお持ちの方は 
                    <a href="login.php" class="text-school font-bold hover:underline">こちらからログイン</a>
                </p>
            </div>
        </div>
    </main>

    <footer class="bg-school text-white text-center py-6 text-sm mt-auto">
        <div class="max-w-6xl mx-auto px-4">&copy; 2026 A高校 Official Store. All Rights Reserved.</div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html>