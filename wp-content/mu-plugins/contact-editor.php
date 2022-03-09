<?php 
/**
 * Plugin Name: Contact Editor
 * Author: Hugo Salazar
 * Author URI: https://hugo.salazar.com/
 * Description: Edition des données de contact (mail, téléphone, adresse)
 * Version 1.0
 */

add_action('admin_menu', 'contactEditor');

function contactEditor() {
  add_menu_page('Contact infos', 'Contact infos', 'activate_plugins', 'contact-editor', 'rendercontactEditor', 'dashicons-admin-site', 81);

  function rendercontactEditor() {
    if(isset($_POST['contact_update'])) {
      if(!wp_verify_nonce($_POST['contactEditor_noncename'], 'contactEditor')) {
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
        <h2>Contact</h2>
      </div>

      <form action="" method="post">
        <div class="theme-options-group">
          <table cellspacing="0" class="widefat options-table">
            <thead>
              <tr>
                <th colspan="2">
                  Renseignez vos infos de contact
                </th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <th scope="row">
                  <label for="email">Email</label>
                </th>

                <th>
                  <input type="text" id="email" name="options[email]" value="<?= get_option('email', ''); ?>" placeholder="Email" size="90"/>
                </th>
              </tr>

              <tr>
                <th scope="row">
                  <label for="phone">Téléphone</label>
                </th>

                <th>
                  <input type="text" id="phone" name="options[phone]" value="<?= get_option('phone', ''); ?>" placeholder="Téléphone" size="90"/>
                </th>
              </tr>

              <tr>
                <th scope="row">
                  <label for="address">Adresse</label>
                </th>

                <th>
                  <input type="text" id="address" name="options[address]" value="<?= get_option('address', ''); ?>" placeholder="4 rue de Paris, Caen 14000, Paris" size="90"/>
                </th>
              </tr>
            </tbody>
          </table>
        </div>

        <input type="hidden" name="contactEditor_noncename" value="<?= wp_create_nonce('contactEditor'); ?>">

        <p class="submit">
          <input type="submit" name="contact_update" class="button-primary autowidth" value="Guardar" />
        </p>
      </form>
    <?php
  }
}