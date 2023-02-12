<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Forgot Password<?= $this->endSection() ?>

<?= $this->section("content") ?>
    
<h1 class="title">Forgot Password</h1>

<?= form_open("/password/processforgot") ?>

    <div>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?= old('email') ?>">
    </div>

    <button type="submit">Send</button>
    
</form>

<?= $this->endSection() ?>