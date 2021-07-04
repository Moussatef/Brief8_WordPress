<?php


if (isset($_POST['submit'])) submit();

function submit()
{
  $opt_website_name = $_POST['sf_opt_wesite'];
  $opt_home_link = $_POST['sf_opt_text'];
  $opt_contact = $_POST['sf_opt_contact'];
  $opt_github = $_POST['sf_opt_github'];
  $opt_nav_1 = $_POST['sf_opt_nav_1'];
  $opt_nav_2 = $_POST['sf_opt_nav_2'];
  $opt_nav_3 = $_POST['sf_opt_nav_3'];
  $opt_link_2 = $_POST['sf_opt_link_2'];
  $opt_link_3 = $_POST['sf_opt_link_3'];
  $opt_adrs = $_POST['sf_opt_adrs'];
  $opt_City = $_POST['sf_opt_City'];
  $opt_Country = $_POST['sf_opt_Country'];
  $opt_phone = $_POST['sf_opt_phone'];
  $opt_desc = $_POST['sf_opt_desc'];
  $opt_email = $_POST['sf_opt_email'];



  global $sf_opt_wesite, $sf_opt_text, $sf_opt_contact, $sf_opt_github, $sf_opt_email, $sf_opt_desc, $sf_opt_phone, $sf_opt_Country, $sf_opt_City, $sf_opt_adrs;

  if (get_option('sf_opt_City') != trim($opt_City))
    update_option('sf_opt_City', trim($opt_City));

  if (get_option('sf_opt_Country') != trim($opt_Country))
    update_option('sf_opt_Country', trim($opt_Country));

  if (get_option('sf_opt_phone') != trim($opt_phone))
    update_option('sf_opt_phone', trim($opt_phone));

  if (get_option('sf_opt_email') != trim($opt_email))
    update_option('sf_opt_email', trim($opt_email));

  if (get_option('sf_opt_desc') != trim($opt_desc))
    update_option('sf_opt_desc', trim($opt_desc));

  if (get_option('sf_opt_wesite') != trim($opt_website_name))
    update_option('sf_opt_text', trim($opt_website_name));

  if (get_option('sf_opt_text') != trim($opt_home_link))
    update_option('sf_opt_brand', trim($opt_home_link));

  if (get_option('sf_opt_contact') != trim($opt_contact))
    update_option('sf_opt_github', trim($opt_contact));

  if (get_option('sf_opt_github') != trim($opt_github))
    update_option('sf_opt_github', trim($opt_github));


  if (get_option('sf_opt_nav_1') != trim($opt_nav_1))
    update_option('sf_opt_nav_1', trim($opt_nav_1));

  if (get_option('sf_opt_nav_2') != trim($opt_nav_2))
    update_option('sf_opt_nav_2', trim($opt_nav_2));

  if (get_option('sf_opt_nav_3') != trim($opt_nav_3))
    update_option('sf_opt_nav_3', trim($opt_nav_3));

  if (get_option('sf_opt_adrs') != trim($opt_adrs))
    update_option('sf_opt_adrs', trim($opt_adrs));
}

?>

<div class="wrap">
  <div id="icon-options-general" class="icon32"> <br>
  </div>
  <h2>Footer Configration</h2>

  <?php if (isset($_POST['submit'])) : ?>
    <div id="message" class="updated below-h2">
      <p>footer has been added successfully.</p>
    </div>
  <?php endif; ?>

  <div class="metabox-holder">
    <div class="postbox">
      <h3>
        <form method="post" action="">
          <table class="form-table">
            <tr>
              <th scope="row">site title</th>
              <td><input type="text" name="sf_opt_wesite" value="<?php echo get_option('sf_opt_wesite'); ?>" style="width:350px;" /></td>
            </tr>
            <tr>
              <th scope="row">Phone number</th>
              <td><input type="text" name="sf_opt_phone" value="<?php echo get_option('sf_opt_phone'); ?>" style="width:350px;" /></td>
            </tr>
            <tr>
              <th scope="row">Email</th>
              <td><input type="text" name="sf_opt_email" value="<?php echo get_option('sf_opt_email'); ?>" style="width:350px;" /></td>
            </tr>
            <tr>
              <th scope="row">Github Username</th>
              <td><input type="text" name="sf_opt_github" value="<?php echo get_option('sf_opt_github'); ?>" style="width:350px;" /></td>
            </tr>
            <tr>
              <th scope="row">Name header N°_1</th>
              <td><input type="text" name="sf_opt_nav_1" value="<?php echo get_option('sf_opt_nav_1'); ?>" style="width:350px;" /></td>
            </tr>
            <tr>
              <th scope="row">Name header N°_2</th>
              <td><input type="text" name="sf_opt_nav_2" value="<?php echo get_option('sf_opt_nav_2'); ?>" style="width:350px;" /></td>
            </tr>
            <tr>
              <th scope="row">Name header N°_3</th>
              <td><input type="text" name="sf_opt_nav_3" value="<?php echo get_option('sf_opt_nav_3'); ?>" style="width:350px;" /></td>
            </tr>
            <tr>
              <th scope="row">Adresse</th>
              <td><input type="text" name="sf_opt_adrs" value="<?php echo get_option('sf_opt_adrs'); ?>" style="width:350px;" /></td>
            </tr>
            <tr>
              <th scope="row">City</th>
              <td><input type="text" name="sf_opt_City" value="<?php echo get_option('sf_opt_City'); ?>" style="width:350px;" /></td>
            </tr>
            <tr>
              <th scope="row">country</th>
              <td><input type="text" name="sf_opt_Country" value="<?php echo get_option('sf_opt_Country'); ?>" style="width:350px;" /></td>
            </tr>
            <tr>
              <th scope="row">Description</th>
              <td>
                <textarea value="<?php echo get_option('sf_opt_desc'); ?>" style="width:350px;" name="sf_opt_desc" class="form-control" rows="10"></textarea>
              </td>
            </tr>

            <tr>
              <th scope="row">&nbsp;</th>
              <td style="padding-top:10px;  padding-bottom:10px;">
                <input type="submit" name="submit" value="Save changes" class="button-primary" />
              </td>
            </tr>
          </table>
        </form>
      </h3>
    </div>
  </div>
</div>