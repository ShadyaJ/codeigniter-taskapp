<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>New user<?= $this->endSection() ?>

<?= $this->section("content") ?>
    
<h1 class="title">Add an user</h1>

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>

<div class="container"></div>

    <?= form_open("/admin/users/create") ?>

        <?= $this->include('Admin/Users/form') ?>

        <div class="field is-grouped">
            <div class="control">
                <button class="button is-primary" type="submit">Save</button>
            </div>
            <a class="button" href="<?= site_url("/admin/users") ?>">Cancel</a>
        </div>

    </form>

</div><!-- End of container -->

<?= $this->endSection() ?>
