<?php
/*
add_action( 'admin_init', 'samandcoop_theme_options_init' );
add_action( 'admin_menu', 'samandcoop_theme_options_add_page' );
*/
/**
* Init plugin options to white list our options
*/
function samandcoop_theme_options_init() {
    register_setting( 'samandcoop_options', 'samandcoop_theme_options', 'samandcoop_theme_options_validate' );
}

/**
* Load up the menu page
*/
function samandcoop_theme_options_add_page() {
    add_theme_page( __( 'Theme Options', 'samandcoop' ), __( 'Theme Options', 'samandcoop' ), 'edit_theme_options', 'theme_options', 'samandcoop_theme_options_do_page' );
}

/**
* Return array for our color schemes
*/
function samandcoop_color_schemes() {
    $color_schemes = array(
    'light' => array(
        'value' =>	'light',
        'label' => __( 'Light', 'samandcoop' )
        ),
    'dark' => array(
        'value' =>	'dark',
        'label' => __( 'Dark', 'samandcoop' )
        ),
    'snowy' => array(
        'value' =>	'snowy',
        'label' => __( 'Snowy', 'samandcoop' )
        ),
    'sunny' => array(
        'value' =>	'sunny',
        'label' => __( 'Sunny', 'samandcoop' )
        ),
        );

    return $color_schemes;
}

/**
* Create the options page
*/
function samandcoop_theme_options_do_page() {

    if ( ! isset( $_REQUEST['settings-updated'] ) )
        $_REQUEST['settings-updated'] = false;

    ?>
    <div class="wrap">
        <?php screen_icon(); echo "<h2>" . get_current_theme() . ' ' . __( 'Theme Options', 'samandcoop' ) . "</h2>"; ?>

        <?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
            <div class="updated fade"><p><strong><?php _e( 'Options saved', 'samandcoop' ); ?></strong></p></div>
        <?php endif; ?>

        <form method="post" action="options.php">
            <?php settings_fields( 'samandcoop_options' ); ?>
            <?php $options = samandcoop_get_theme_options(); ?>

            <table class="form-table">

                <?php
            /**
            * Clean Home Color Scheme
            */
        ?>
        <tr valign="top"><th scope="row"><?php _e( 'Color Scheme', 'samandcoop' ); ?></th>
            <td>
                <select name="samandcoop_theme_options[color_scheme]">
                    <?php
                $selected = $options['color_scheme'];
                $p = '';
                $r = '';

                foreach ( samandcoop_color_schemes() as $option ) {
                    $label = $option['label'];

                    if ( $selected == $option['value'] ) // Make default first in list
                    $p = "\n\t<option selected='selected' value='" . esc_attr( $option['value'] ) . "'>$label</option>";
                    else
                        $r .= "\n\t<option value='" . esc_attr( $option['value'] ) . "'>$label</option>";
                }
                echo $p . $r;
                ?>
            </select>
            <label class="description" for="samandcoop_theme_options[color_scheme]"><?php _e( 'Select a default color scheme', 'samandcoop' ); ?></label>
        </td>
    </tr>

</table>

<p class="submit">
    <input type="submit" class="button-primary" value="<?php esc_attr_e( 'Save Options', 'samandcoop' ); ?>" />
</p>
</form>
</div>
<?php
}

/**
* Sanitize and validate input. Accepts an array, return a sanitized array.
*/
function samandcoop_theme_options_validate( $input ) {

    // Our color scheme option must actually be in our array of color scheme options
    if ( ! array_key_exists( $input['color_scheme'], samandcoop_color_schemes() ) )
        $input['color_scheme'] = null;

    return $input;
}