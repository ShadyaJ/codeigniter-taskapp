<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Edit profile<?= $this->endSection() ?>

<?= $this->section("content") ?>
    
<h1 class="title">Edit profile</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>

<div class="container">

    <?= form_open("/profile/update/") ?>

        <div class="field">
            <label class="label" for="name">Name</label>
            <div class="control">
                <input class="input" type="text" name="name" id="name" value="<?= old('name', esc($user->name)) ?>">
            </div>
        </div>

        <div class="field">
            <label class="label" for="email">Email</label>
            <div class="control">
                <input class="input" type="text" name="email" id="email" value="<?= old('email', esc($user->email)) ?>">
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