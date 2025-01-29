<?php include __DIR__ . '/../partials/header.php' ?>
<div class="container">
    <form action="/login" method="POST">
        <div class="field">
            <label class="label" for="Email">Email</label>
            <div class="control">
                <input 
                class="input" 
                type="text" 
                placeholder="Email" 
                id="email" 
                name="email"
                autocomplete="email">
            </div>
        </div>
        <div class="field">
            <label class="label" for="password">Password</label>
            <div class="control">
                <input 
                class="input" 
                type="password" 
                id="password" 
                name="password">
                
            </div>
        </div>
        <div class="field">
            <input type="submit" value="Login" class="button is-primary">
        </div>
    </form>
</div>
<?php include __DIR__ . '/../partials/footer.php' ?>