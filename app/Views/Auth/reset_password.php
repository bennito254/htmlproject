<?php

/***
 * Created by Patrick Karungari
 *
 * Github: https://github.com/patrick-Karungari
 * E-Mail: PKARUNGARI@GMAIL.COM
 */
?>
<script>
document.getElementById('myImage').src = '<?php echo site_url('assets/images/pages/reset-password-v2-dark.svg') ?>';
</script>
<h2 class="card-title font-weight-bold mb-1">Reset Password 🔒</h2>
<p class="card-text mb-2">Your new password must be different from previously used passwords</p>
<form class="auth-reset-password-form mt-2" action="" method="post">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <input type="hidden" name="userid" value="<?php echo $user->id; ?>">
        <div class="d-flex justify-content-between">
            <label for="reset-password-new">New Password</label>
        </div>
        <div class="input-group input-group-merge form-password-toggle">
            <input class="form-control form-control-merge" id="password" type="password" name="password"
                placeholder="············" aria-describedby="reset-password-new" autofocus="" tabindex="1" required />
            <div class="input-group-append"><span class="input-group-text cursor-pointer"><i
                        data-feather="eye"></i></span></div>
        </div>
    </div>
    <div class="form-group">
        <div class="d-flex justify-content-between">
            <label for="reset-password-confirm">Confirm Password</label>
        </div>
        <div class="input-group input-group-merge form-password-toggle">
            <input class="form-control form-control-merge" id="confirm_password" type="password" name="confirm_password"
                placeholder="············" aria-describedby="reset-password-confirm" tabindex="2" required />
            <div class="input-group-append"><span class="input-group-text cursor-pointer"><i
                        data-feather="eye"></i></span></div>
        </div>
    </div>
    <button class="btn btn-primary btn-block" tabindex="3">Set New Password</button>
</form>
<p class="text-center mt-2"><a href="<?php echo site_url('auth') ?>"><span class="iconify"
            data-icon="feather-chevron-left" data-inline="false"></span> Back to
        login</a></p>
