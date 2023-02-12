<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Edit password<?= $this->endSection() ?>

<?= $this->section("content") ?>
    
<h1 class="title">Edit password</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>

<div class="container">

    <?= form_open("/profile/updatepassword/") ?>

        <div class="field">
            <label class="label" for="current_password">Current password</label>
            <div class="control">
                <input class="input" type="password" name="current_password">
            </div>
        </div>

        <div class="field">
            <label class="label" for="password">New password</label>
            <div class="control">
                <input class="input" type="password" name="password">
            </div>
        </div>


        <div class="field">
            <label class="label" for="password_confirmation">Repeat new password</label>
            <div class="control">
                <input class="input" type="password" name="password_confirmation">
            </div>
        </div>

        <div class="field is-grouped">
            <div class="control">
                <button class="button is-primary" type="submit">Save</button>
            </div>
            <a class="button" href="<?= site_url("/profile/show/") ?>">Cancel</a>
        </div>

    </form>

</div><!-- End of container -->

<?= $this->endSection() ?>