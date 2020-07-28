<main>
    <form class="card-form" action="/register" method="POST">
        <h1>Welcome to Posting!</h1>
        <div class="input-field">
            <input class="field" type="text" id="username" name="username">
            <label for="username">Username</label>
            <div class="overlay"></div>
        </div>
        <div class="input-field">
            <input class="field" type="password" id="password" name="password">
            <label for="password">Password</label>
            <div class="overlay"></div>
        </div>
        <div class="input-field">
            <input class="field" type="password" id="conf-pass" name="conf-pass">
            <label for="conf-pass">Confirm Password</label>
            <div class="overlay"></div>
        </div>
        <span class="err bold">
            <?= $_GET['err'] == "1" ? 'Confirmation password not same' : ($_GET['err'] == "2" ? 'Register Failed' : ($_GET['err'] == "3" ? 'Username is already used' : '&nbsp;')) ?></span>
        <button>Register</button>
        
        <span class="additional bold">Already have an account? <a href="/login" class="link">Login</a> here!</span>
    </form>
    <script src="/public/js/input-field.js"></script>
</main>