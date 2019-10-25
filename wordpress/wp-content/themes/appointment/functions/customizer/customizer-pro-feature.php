<?php //Pro Details
function appointment_pro_feature_customizer($wp_customize)
{
    class WP_Pro__Feature_Customize_Control extends WP_Customize_Control
    {
        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content()
        {
            ?>
            <div class="appointment-pro-features-customizer">
                <ul class="appointment-pro-features">
                    <li>
                        <span class="appointment-pro-label"><?php _e('PRO', 'appointment'); ?></span>
                        <?php _e('Advanced Header Settings', 'appointment'); ?>
                    </li>
                    <li>
                        <span class="appointment-pro-label"><?php _e('PRO', 'appointment'); ?></span>
                        <?php _e('Mulitple Page Templates', 'appointment'); ?>
                    </li>
                    <li>
                        <span class="appointment-pro-label"><?php _e('PRO', 'appointment'); ?></span>
                        <?php _e('Portfolio Management', 'appointment'); ?>
                    </li>
                    <li>
                        <span class="appointment-pro-label"><?php _e('PRO', 'appointment'); ?></span>
                        <?php _e('Slide Variations', 'appointment'); ?>
                    </li>
                    <li>
                        <span class="appointment-pro-label"><?php _e('PRO', 'appointment'); ?></span>
                        <?php _e('Create Unlimited Services', 'appointment'); ?>
                    </li>
                    <li>
                        <span class="appointment-pro-label"><?php _e('PRO', 'appointment'); ?></span>
                        <?php _e('Manage Contact Details', 'appointment'); ?>
                    </li>
                    <li>
                        <span class="appointment-pro-label"><?php _e('PRO', 'appointment'); ?></span>
                        <?php _e('Testimonial Section', 'appointment'); ?>
                    </li>
                    <li>
                        <span class="appointment-pro-label"><?php _e('PRO', 'appointment'); ?></span>
                        <?php _e('Client Section', 'appointment'); ?>
                    </li>
                    <li>
                        <span class="appointment-pro-label"><?php _e('PRO', 'appointment'); ?></span>
                        <?php _e('Team Section', 'appointment'); ?>
                    </li>
                    <li>
                        <span class="appointment-pro-label"><?php _e('PRO', 'appointment'); ?></span>
                        <?php _e('Custom Color Schemes', 'appointment'); ?>
                    </li>
                    <li>
                        <span class="appointment-pro-label"><?php _e('PRO', 'appointment'); ?></span>
                        <?php _e('Section Reordering', 'appointment'); ?>
                    </li>
                    <li>
                        <span class="appointment-pro-label"><?php _e('PRO', 'appointment'); ?></span>
                        <?php _e('Footer Callout Settings', 'appointment'); ?>
                    </li>
                    <li>
                        <span class="appointment-pro-label"><?php _e('PRO', 'appointment'); ?></span>
                        <?php _e('Quality Support', 'appointment'); ?>
                    </li>
                </ul>
                <a target="_blank" href="<?php echo 'http://webriti.com/appointment/'; ?>"
                   class="appointment-pro-button button-primary"><?php _e('UPGRADE TO PRO', 'appointment'); ?></a>
                <hr>
            </div>
            <?php
        }
    }

    $wp_customize->add_section('appointment_pro_feature_section', array(
        'title' => __('View PRO Details', 'appointment'),
        'priority' => 1,
    ));

    $wp_customize->add_setting(
        'upgrade_pro_feature',
        array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(new WP_Pro__Feature_Customize_Control($wp_customize, 'upgrade_pro_feature', array(
            'section' => 'appointment_pro_feature_section',
            'setting' => 'upgrade_pro_feature',
        ))
    );

    class WP_Feature_document_Customize_Control extends WP_Customize_Control
    {
        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content()
        {
            ?>

            <div class="appointment-pro-content">
                <ul class="appointment-pro-des">
                    <li> <?php _e('Add top header bar with advance configuration settings.', 'appointment'); ?></li>
                    <li> <?php _e('Theme comes with multiple page settings like portfolio 2/3/4 column, about us etc etc.', 'appointment'); ?></li>
                    <li> <?php _e('Create professional looking portfolio.', 'appointment'); ?></li>
                    <li> <?php _e('Pro version theme comes with various slide variations like you can add video slide, aside, quote etc etc.', 'appointment'); ?></li>
                    <li> <?php _e('Add as many services you like. You can even display all the services on a separate page.', 'appointment'); ?></li>
                    <li> <?php _e('Theme comes with a beautifully designed section where you can manage your contact details.', 'appointment'); ?></li>
                    <li> <?php _e('Show all your team members, clients, testimonials on front page.', 'appointment'); ?></li>
                    <li> <?php _e('You will enjoy more frontpage sections along with there settings.', 'appointment'); ?></li>
                    <li> <?php _e('Select among predefined color skins, you can even create yours without writing any CSS code.', 'appointment'); ?></li>
                    <li> <?php _e('Layout manager will helps you to rearange the sections.', 'appointment'); ?></li>
                    <li> <?php _e('Translation ready supporting popular plugins WPML / Polylang', 'appointment'); ?></li>
                    <li> <?php _e('Support for google map 24/7 professional support', 'appointment'); ?></li>
                    <li> <?php _e('Dedicated support, various widget and sidebar management.', 'appointment'); ?></li>
                </ul>
            </div>
            <?php
        }
    }

    $wp_customize->add_setting(
        'doc_Review_feature',
        array(
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control(new WP_Feature_document_Customize_Control($wp_customize, 'doc_Review_feature', array(
            'section' => 'appointment_pro_feature_section',
            'setting' => 'doc_Review_feature',
        ))
    );

}

add_action('customize_register', 'appointment_pro_feature_customizer');
?>