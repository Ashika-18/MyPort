<!DOCTYPE html>
<!-- page-contact.php -->
<html <?php language_attributes() ?>>
<head>
<script src="https://sdk.form.run/js/v2/formrun.js"></script>
    <?php get_header(); ?>
    <?php wp_head(); ?>
</head>
<!-- class, action, methodを変更しないでください -->
<form class="formrun" action="//form.run/api/v1/r/5ibt7xg3rctht4wvaegl6a6t" method="post">
  <!-- ↓自由に要素を追加・編集することができます -->
    <div class="contact">
      <a class="contact-home" href="<?php echo esc_url(home_url('/')); ?>">HOMEへ戻る</a>
      <h4>お問合せはこちらから</h4>
    </div>
  <div id="form-top">
      <div id="form">
        <label class="tag name" for="name"><span class="must"> 必須 </span>お名前 </label>
        <input id="name" placeholder="名前" name="お名前" type="text">
      </div>

      <div id="form">
        <label class="tag" for="email"><span class="must">必須 </span> メールアドレス </label>
        <input id="email" class="wrapper" placeholder="Mail" name="メールアドレス" type="text" data-formrun-type="email" data-formrun-required>
        <div class="error" data-formrun-show-if-error="メールアドレス">メールアドレスを正しく入力してください</div>
      </div>

      <div id="form">
        <label class="tag question" for="text"><span class="must">必須</span> お問い合わせ </label>
        <textarea id="text" class="wrapper" placeholder="問合せ内容" name="お問い合わせ" data-formrun-required></textarea>
        <div class="error" data-formrun-show-if-error="お問い合わせ">お問い合わせ入力してください</div>
      </div>

      <div id="form">
        <label><span class="must">必須</span> 個人情報利用同意 </label>
        <input class="check" type="checkbox" name="個人情報利用同意" data-formrun-required>
        <div class="error" data-formrun-show-if-error="個人情報利用同意">同意してください</div>
      </div>
  </div>
  <!-- ボット投稿をブロックするためのタグ -->
  <div class="_formrun_gotcha">
    <style media="screen">._formrun_gotcha {position:absolute!important;height:1px;width:1px;overflow:hidden;}</style>
    <label for="_formrun_gotcha">If you are a human, ignore this field</label>
    <input type="text" name="_formrun_gotcha" id="_formrun_gotcha" tabindex="-1">
  </div>

  <button class="btn" type="submit" data-formrun-error-text="未入力の項目があります" data-formrun-submitting-text="送信中...">送信</button>
</form>