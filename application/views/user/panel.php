<div class="container">

    <!-- Include Flash Data File -->
    <?php $this->load->view('_FlashAlert\flash_alert.php') ?>
    
    <div class="jumbotron">
        <h1 class="display-4">Welcome to <?= $this->session->userdata('USER_NAME') ?></h1>
        <p>CodeIgnier 3 login and registration full application.</p>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="#" role="button">Source Code</a>
        <a class="btn btn-danger btn-lg" href="#" role="button">Video Tutorials</a>
    </div>
</div>