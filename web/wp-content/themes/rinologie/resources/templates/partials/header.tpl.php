<header class="header-main navbar navbar-dark bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-main__inlay">
                    <div class="header-main__logo">
                        <a href="<?= get_home_url(); ?>">Logo</a>
                    </div>
                </div>
                <!-- <h2><?= $title ?></h2>
                <p><?= $lead ?></p> -->
            </div>
        </div>
    </div>

    <?php
        /**
         * Functions hooked into `theme/header/end` action.
         *
         * @hooked Cod3labs\Theme\App\Structure\render_documentation_button - 10
         
        do_action('theme/header/end')
        */
    ?>
</header>
