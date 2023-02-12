<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Delete profile image<?= $this->endSection() ?>

<?= $this->section("content") ?>
    
<h1 class="title">Delete profile image</h1>

<div class="container">

    <p>Are you sure?</p>

    <?= form_open("/profileimage/delete") ?>

        <div class="field is-grouped">
            <div class="control">
                <button class="button is-danger" type="submit">Yes</button>
            </div>
            <a class="button" href="<?= site_url('/profile/show/') ?>">Cancel</a>
        </div>

    </form>

</div><!-- End of container -->

<?= $this->endSection() ?>