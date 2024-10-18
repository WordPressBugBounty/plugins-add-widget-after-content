<?php

/**
 * Admin settings page
 *
 *
 * @link       https://arelthiaphillips.com
 * @since      2.2
 *
 * @package    Add Widget After Content
 * @subpackage Add Widget After Content/partials
 */
?>


    <div class="wrap">
    <h2><span class="dashicons dashicons-admin-settings"></span><?php esc_html_e('Add Widget After Content Options', 'add-widget-after-content') ?></h2>
    <hr/>
<?php do_action( 'ps_awac_settings_top' ); ?>

    
        <a class="nav-tab nav-tab-active">General</a>


    <div id="ps_admin" class="metabox-holder">


        <div id="post-body" class="has-sidebar">
            <div id="post-body-content" class="has-sidebar-content">
                <div id="normal-sortables" class="meta-box-sortables">

                    <div class="postbox">
                        <div class="inside">
                            <form method="post" action="options.php">
                                <?php
                                wp_nonce_field('awac-options-nonce', 'awac_options_nonce');
                                settings_fields( 'awac_basic' );
                                $section = 'awac-options';
                                do_settings_sections( $section );
                                submit_button();
                                ?>
                            </form>
                            <div class="clear"></div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
        <?php do_action( 'ps_awac_settings_bottom' ); ?>
    </div>