<!-- プラグインで実装のため未使用 -->
<form class="contact-form wpcf7-form invalid" action="#" method="post">
    <div class="form-group">
        <label for="name">お名前</label>
        <input type="text"id="name" name="name" placeholder="Name" required>
    </div>
    <div class="form-group">
        <label for="email">メールアドレス</label>
        <input type="email"id="email" name="email" placeholder="Email" required>
    </div>
    <div class="form-group">
        <label for="message">お問い合わせ内容</label>
        <textarea id="message" name="message" rows="5" placeholder="Message" required></textarea>
    </div>
    <div class="form-group__privacy">
        <label for="privacy">
            <input type="checkbox" id="privacy" name="privacy" required>
            プライバシーポリシーに同意する
        </label>
    </div>
    <div class="form-group__button">
        <button type="submit"><pre>送   信</pre></button>
    </div>
</form>