<?php
/**
 * Plugin Name: ViaCEP API
 * Plugin URI: https://wedeploy.com.br
 * Description: Finds address by cep
 * Version: 1.0
 * Author: Alik Welyn
 * Author URI: https://github.com/alikwelyn
 * License: GPL2
 * Text Domain: custom-wp-login
 */

function viacep_api(){
    echo file_get_contents(plugins_url().'/api-cep/api.php');
}

add_shortcode('viacep-api', 'viacep_api');

?>