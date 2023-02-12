<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Password reset<?= $this->endSection() ?>

<?= $this->section("content") ?>
    
<h1 class="title">Password reset</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>

<?= form_open("password/processreset/$token") ?>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password">
    </div>

    <div>
        <label for="password_confirmation">Repeat Password</label>
        <input type="password" name="password_confirmation">
    </div> 

    <button type="submit">Reset password</button>

</form>

<?= $this->endSection() ?>