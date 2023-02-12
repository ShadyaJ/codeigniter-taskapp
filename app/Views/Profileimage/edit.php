<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Edit profile image<?= $this->endSection() ?>

<?= $this->section("content") ?>
    
<h1 class="title">Edit profile image</h1>

<div class="container">

    <?= form_open_multipart("/profileimage/update/") ?>

        <div class="file">
            <label class="file-label">
            <input class="file-input" type="file" name="image" id="image">
                <span class="file-cta">
                <span class="file-icon">
                    <i class="fas fa-upload"></i>
                </span>
                <span class="file-label">
                    Choose a file…
                </span>
                </span>
            </label>
        </div>

        <div class="field is-grouped mt-4">
            <div class="control">
                <button class="button is-primary" type="submit">Upload</button>
            </div>
            <a class="button" href="<?= site_url("/profile/show") ?>">Cancel</a>
        </div>
  
    </form>

</div><!-- End of container -->

<?= $this->endSection() ?>