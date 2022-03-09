<?php 
/**
 * Plugin Name: Socials Editor
 * Author: Hugo Salazar
 * Author URI: https://hugo.salazar.com/
 * Description: Edición de las redes sociales desde el panel de administración
 * Version 1.0
 */

add_action('admin_menu', 'socialsEditor');

function socialsEditor() {
  add_menu_page('Réseaux Sociaux', 'Réseaux Sociaux', 'activate_plugins', 'socials-editor', 'renderSocialsEditor', 'dashicons-admin-site', 81);

  function renderSocialsEditor() {
    if(isset($_POST['socials_update'])) {
      if(!wp_verify_nonce($_POST['socialsEditor_noncename'], 'socialsEditor')) {
        die('Token non valide');
      }

      foreach($_POST['options'] as $name => $value) {
        if(empty($value)) {
          delete_option($name);
        } else {
          update_option($name, $value);
        }
      }

      ?>
        <div id="message" class="update fade">
          <p><strong>Mise à jour effectuée.</strong></p>
        </div>
      <?php
    }
    ?>
      <div class="wrap theme-options-page">
        <h2>Réseaux Sociaux</h2>
      </div>

      <form action="" method="post">
        <div class="theme-options-group">
          <table cellspacing="0" class="widefat options-table">
            <thead>
              <tr>
                <th colspan="2">
                  Ecrire uniquement le nom d'utilisateur
                </th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <th scope="row">
                  <label for="facebook">Facebook</label>
                </th>

                <th>
                  <input type="text" id="facebook" name="options[facebook]" value="<?= get_option('facebook', ''); ?>" size="90"/>
                </th>
              </tr>

              <tr>
                <th scope="row">
                  <label for="instagram">Instagram</label>
                </th>

                <th>
                  <input type="text" id="instagram" name="options[instagram]" value="<?= get_option('instagram', ''); ?>" size="90"/>
                </th>
              </tr>
            </tbody>
          </table>
        </div>

        <input type="hidden" name="socialsEditor_noncename" value="<?= wp_create_nonce('socialsEditor'); ?>">

        <p class="submit">
          <input type="submit" name="socials_update" class="button-primary autowidth" value="Guardar" />
        </p>
      </form>
    <?php
  }
}