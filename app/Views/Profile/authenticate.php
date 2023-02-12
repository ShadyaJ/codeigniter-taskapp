<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Edit Profile<?= $this->endSection() ?>

<?= $this->section("content") ?>
    
<h1 class="title">Edit Profile</h1>

<div class="container">

    <p>Please enter your password to continue.</p>

    <?= form_open("/profile/processauthenticate/") ?>

        <div class="field">
            <label class="label" for="password">Password</label>
            <div class="control">
                <input class="input" type="password" name="password">
            </div>
        </div>

        <div class="field is-grouped">
            <div class="control">
                <button class="button is-primary" type="submit">Send</button>
            </div>
            <a class="button" href="<?= site_url("/profile/show/") ?>">Cancel</a>
        </div>

    </form>

</div><!-- End of container -->

<?= $this->endSection() ?>