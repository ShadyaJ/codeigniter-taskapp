<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Delete user<?= $this->endSection() ?>

<?= $this->section("content") ?>
    
<h1 class="title">Delete user</h1>

<div class="container">

    <p>Are you sure?</p>

    <?= form_open("/admin/users/delete/" . $user->id) ?>

        <div class="field is-grouped">
            <div class="control">
                <button class="button is-danger" type="submit">Yes</button>
            </div>
            <a class="button" href="<?= site_url('/admin/users/show/' . $user->id) ?>">Cancel</a>
        </div>

    </form>

</div><!-- End of container -->

<?= $this->endSection() ?>