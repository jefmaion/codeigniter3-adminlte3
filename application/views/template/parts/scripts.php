<script src="<?= $this->adminlte->vendor('/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= $this->adminlte->vendor('/dist/js/adminlte.min.js') ?>"></script>
<!-- <script src="<?= $this->adminlte->vendor('/dist/js/demo.js') ?>"></script> -->
<!-- Load app.js file -->
<!-- <script src="<?= base_url('public/js/app.js') ?>"></script> -->

<script>

function toggleDarkMode() {
    isDark = localStorage.getItem('isDarkMode')
    if(isDark == "true") {
        setMode();
    }
}

function setMode() {
    $('body').toggleClass('dark-mode has-dark-mode')
    $('.main-header').toggleClass('dark-mode navbar-dark')

    if($(".brand-link").is('[class*="bg-"]')) {
        $('.brand-link').toggleClass('dark-mode')
    }
}


$('.adminlte-dark-mode-switch').on('click', function () {
    setMode()
    localStorage.setItem('isDarkMode', $('body').hasClass('has-dark-mode'));
})

toggleDarkMode();



</script>

