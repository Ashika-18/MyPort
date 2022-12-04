<!-- ハンバーガーメニューの表示・非表示を切り替えるチェックボックス -->
<input id="drawer_input" class="drawer_hidden" type="checkbox">
<!-- ハンバーガーアイコン -->
<label for="drawer_input" class="drawer_open"><span></span></label>
    <div class="nav_content">
        <ul>
            <li class="nav_item"><a href="index.php#about">About</a></li>
            <li class="nav_item"><a href="index.php#work">Work</a></li>
            <li class="nav_item"><a href="index.php#news">News</a></li>
            <li class="nav_item"><a href="https://github.com/Ashika-18">Git Hub</a></li>
            <li class="nav_item"><a href="/contact">Contact</a></li>
            <li class="nav_item"><a href="<?php echo esc_url(home_url('/')); ?>">Homeへ戻る</a></li>
        </ul>
    </div>