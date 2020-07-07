<div class="content-i">
    <div class="content-box">
        <div class="big-error-w">
            <h1>403</h1>
            <h5>Access Forbidden</h5>
            <h4 class="mb-3">Oops, Something went missing...</h4>
            <?php
            if ($this->session->userdata('role_id') == 2) : ?>
                <a href="<?= base_url('dekan') ?>">&larr; Back to Dashboard</a>
            <?php endif; ?>

        </div>