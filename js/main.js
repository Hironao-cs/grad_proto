$(document).ready(function() {
    
    // ===============================================
    // プロフィール登録画面 (alumni_info.php) の制御
    // ===============================================
    
    // 要素が存在する場合のみ実行（エラー防止）
    const $statusSelect = $('#status_select');

    if ($statusSelect.length) {
        $statusSelect.on('change', function() {
            const val = $(this).val();
            
            // 書き換える対象の要素
            const $orgLabel = $('#org_label');
            const $depLabel = $('#dep_label');
            const $orgInput = $('#org_input');
            const $depInput = $('#dep_input');

            // 選択された値に応じて表示を切り替え
            if (val === '大学生') {
                $orgLabel.text('大学名');
                $depLabel.text('学部・学科');
                $orgInput.attr('placeholder', '例：〇〇大学');
                $depInput.attr('placeholder', '例：経済学部 経済学科');
            } else if (val === '浪人生') {
                $orgLabel.text('予備校名');
                $depLabel.text('補足（宅浪など）');
                $orgInput.attr('placeholder', '例：〇〇予備校（なしの場合は「なし」）');
                $depInput.attr('placeholder', '例：国立文系コース、宅浪など');
            } else if (val === '社会人') {
                $orgLabel.text('勤務先・会社名');
                $depLabel.text('部署・職種');
                $orgInput.attr('placeholder', '例：株式会社〇〇');
                $depInput.attr('placeholder', '例：営業部、エンジニアなど');
            }
        });
    }

});