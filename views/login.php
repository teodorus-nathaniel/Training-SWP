<main>
    <form class="card-form" action="/login" method="POST">
        <h1>Welcome to Posting!</h1>
        <div class="input-field">
            <input class="field" type="text" id="username" name="username" value="<?= isset($_COOKIE['username']) ? $_COOKIE['username'] : '' ?>">
            <label for="username">Username</label>
            <div class="overlay"></div>
        </div>
        <div class="input-field">
            <input class="field" type="password" id="password" name="password">
            <label for="password">Password</label>
            <div class="overlay"></div>
        </div>
        <span class="err bold"><?= isset($_GET['err']) ? 'Wrong Username / Password' : '&nbsp;' ?></span>
        <button>Login</button>
        
        <span class="additional bold">Don't have an account yet? <a href="/register" class="link">Register</a> here!</span>
    </form>
    <script src="/public/js/input-field.js"></script>
</main>