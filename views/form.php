<main>
    <div class="container">
        <div class="insert-modal" id="insert-modal">
            <form class="form" action="/form" method="POST">
                <h1>What's your story?</h1>
                <textarea rows="10" name="post" id="post-field"></textarea>
                <div class="actions">
                    <button class="alt" type="button" id="cancel-btn">Cancel</button>
                    <button id="submit-btn" type="submit">Post</button>
                </div>
            </form>
        </div>
        <div class="post-btn">
            <button id="post-btn">+</button>
        </div>
        <div class="post-container" id="post-container">
            <?php for($i = 0; $i < count($posts); $i++) { ?>
                <div class="card">
                    <div class="profile">
                        <img src="/public/img/profile.svg" alt="profile">
                        <span class="bold"><?= $posts[$i]->username ?></span>
                    </div>
                    <p><?= $posts[$i]->content ?></p>
                    <span class="time">
                        <?= $posts[$i]->timestamp ?>
                    </span>
                </div>
            <?php } ?>
        </div>
    </div>
    <script src="./public/js/form-page.js"></script>
</main>