<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Delete task<?= $this->endSection() ?>

<?= $this->section("content") ?>
    
<h1 class="title">Delete task</h1>

<div class="container">

    <p>Are you sure?</p>

    <?= form_open("/tasks/delete/" . $task->id) ?>

        <div class="field is-grouped">
            <div class="control">
                <button class="button is-danger" type="submit">Yes</button>
            </div>
            <a class="button" href="<?= site_url('/tasks/show/' . $task->id) ?>">Cancel</a>
        </div>

    </form>

</div><!-- End of container -->

<?= $this->endSection() ?>