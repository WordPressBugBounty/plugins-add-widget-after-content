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
    <h2><span class="dashicons dashicons-admin-settings"></span><?php _e('Add Widget After Content Options', 'add-widget-after-content') ?></h2>
    <hr/>
<?php do_action( 'ps_awac_settings_top' ); ?>
    
    <?php 
        if( isset( $_GET[ 'tab' ] ) ) {
            $active_tab = $_GET[ 'tab' ];
        }else {
            $active_tab = 'awac_basic';
        } 
    ?>

    <?php foreach ($tabs as $tab => $value) { ?>
<a href="?page=awac-options&tab=<?php echo $tab?>" class="nav-tab <?php echo $tab == $active_tab ? 'nav-tab-active' : ''; ?>"><?php echo $value ?></a>
 <?php   }  ?>

    <div id="ps_admin" class="metabox-holder">


        <div id="post-body" class="has-sidebar">
            <div id="post-body-content" class="has-sidebar-content">
                <div id="normal-sortables" class="meta-box-sortables">

                    <div class="postbox">
                        <div class="inside">
                            <!-- <h2 class="hndle"><?php /* echo $tabs[$active_tab]*/  ?></h2> -->
                            <form method="post" action="options.php">
                                <?php
                                settings_fields( $active_tab );
                                $section = ('awac_basic' == $active_tab) ? 'awac-options' : $active_tab;
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