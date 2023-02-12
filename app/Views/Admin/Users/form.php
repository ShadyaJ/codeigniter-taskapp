<!-- <div class="field">
    <label class="checkbox" for="remember_me">
        <input type="checkbox" id="remember_me" name="remember_me"
            <?php if (old('remember_me')): ?>checked<?php endif ?>> Remember me
    </label>
</div> -->

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

<div class="field">
    <label class="label" for="password">Password</label>
    <div class="control">
        <input class="input" type="password" name="password">
        <?php if ($user->id): ?>
            <p class="help">Leave blank to keep exisiting password</p>
        <?php endif ?>
    </div>
</div>

<div class="field">
    <label class="label" for="password_confirmation">Repeat Password</label>
    <div class="control">
        <input class="input" type="password" name="password_confirmation">
    </div>
</div>

<div class="field">
    <label class="checkbox" for="is_active">
        <?php if ($user->id == current_user()->id): ?>

            <input type="checkbox" checked disabled> Active
        
        <?php else: ?>

        <input type="hidden" name="is_active" value="0">

        <input type="checkbox" id="is_active" name="is_active" value="1"
            <?php if (old('is_active', $user->is_active)): ?>checked<?php endif; ?>> Active?
        
        <?php endif ?>
    </label>
</div>
 
<div class="field">
    <label class="checkbox" for="is_admin">
        <?php if ($user->id == current_user()->id): ?>

            <input type="checkbox" checked disabled> Administrator
        
        <?php else: ?>

        <input type="hidden" name="is_admin" value="0">

        <input type="checkbox" id="is_admin" name="is_admin" value="1"
            <?php if (old('is_admin', $user->is_admin)): ?>checked<?php endif; ?>> Administrator?
        
        <?php endif ?>
    </label>
</div>
