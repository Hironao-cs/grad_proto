<?php
session_start();
require_once('funcs.php');
loginCheck(); 
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プロフィール登録 - いってら〜</title>
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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body class="flex flex-col min-h-screen bg-gray-50 text-gray-800">

    <header class="bg-school text-white py-4 shadow-md sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4">
            <h1 class="text-xl font-bold tracking-wider">いってら〜A高校〜</h1>
        </div>
    </header>

    <main class="flex-grow flex items-center justify-center p-6">
        <div class="w-full max-w-md bg-white p-10 rounded-xl shadow-lg border border-gray-100">
            <h2 class="text-2xl font-bold mb-8 text-center text-school">詳細プロフィール登録</h2>
            
            <form action="alumni_info_act.php" method="POST" class="space-y-6">
                <input type="hidden" name="user_id" value="<?= h($_SESSION['user_id']) ?>">

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">現在の状況</label>
                    <select name="status" id="status_select" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-school focus:border-school outline-none bg-white transition-all">
                        <option value="">選択してください</option>
                        <option value="大学生">大学生</option>
                        <option value="浪人生">浪人生</option>
                        <option value="社会人">社会人</option>
                    </select>
                </div>

                <div>
                    <label id="org_label" class="block text-sm font-semibold text-gray-700 mb-2">所属先名称</label>
                    <input type="text" name="organization" id="org_input" required
                        placeholder="大学名、会社名など"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-school focus:border-school outline-none transition-all">
                </div>

                <div>
                    <label id="dep_label" class="block text-sm font-semibold text-gray-700 mb-2">詳細情報</label>
                    <input type="text" name="department" id="dep_input"
                        placeholder="学部、部署、職種など"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-school focus:border-school outline-none transition-all">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">高校卒業年度（西暦）</label>
                    <input type="number" name="graduation_year" placeholder="2026年3月に卒業した場合は2025年度" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-school focus:border-school outline-none transition-all">
                </div>

                <button type="submit" 
                    class="w-full bg-school hover:bg-school-dark text-white font-bold py-3 rounded-lg shadow-md transition-all transform active:scale-[0.98]">
                    登録を完了する
                </button>
            </form>
        </div>
    </main>

    <footer class="bg-school text-white text-center py-6 text-sm mt-auto">
        <div class="max-w-6xl mx-auto px-4">&copy; 2026 A高校 Official Store. All Rights Reserved.</div>
    </footer>
    <script src="js/main.js"></script>

</body>
</html>