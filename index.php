<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>OMW Email Signatures</title>
  </head>
  <body>
    <?php
    $json = file_get_contents('data.json');
    $obj = json_decode( $json );
    //var_dump($obj);
    ?>
<style media="screen">
  span {
    color: #ccc;
  }
 .grid-container {
  display: grid;
  grid: 80px / 120px auto;
  grid-gap: 30px;
  }
  .grid-container > div {
  }
</style>
    <?php foreach($obj as $member): ?>
      <span style="display: block; margin: 20px 0;">copy from here</span>
      <div style="font-family:-apple-system, BlinkMacSystemFont, “Segoe UI”, Roboto, Helvetica, Arial, sans-serif;">
        <table border="0" cellspacing="0">
          <tr>
            <td style="padding-top: 5px;">
              <p style="color: #3C3E44; margin: 0px; padding-bottom: 2px; font-size: 16px!important; font-weight: 700; font-weight: bold;">
                <?php if(!empty($member->linkedin)): ?>
                <a style="color: #6C22E3; text-decoration: none;" href="<?php echo $member->linkedin;?>"><?php echo $member->name; ?></a>
                <?php else: ?>
                  <?php echo $member->name; ?>
                <?php endif; ?>
              </p>
              <?php if(!empty($member->position)): ?><p style="margin: 0px; padding: 0; font-size: 14px; color: #3C3E44;font-weight: 700; font-weight: bold;"><?php echo $member->position; ?></p><?php endif; ?>
              <div class="grid-container">
                <div class="item1">
                  <a href="https://openmindwellbeing.com/" target="_blank"><img src="https://www.dropbox.com/s/2ilcqgt8z6kzf6k/OMW%20logo%20default.png?dl=1" alt="www.openmindwellbeing.com" height="40" style="margin-top: 20px"></a>
                </div>
                <div class="item2">
                  <?php if(!empty($member->mobile)): ?>
                    <p style="margin-bottom: 0;padding: 0; font-size: 14px; color: #3C3E44;">
                      <a style="color: #3C3E44; text-decoration: none;" href="tel:+44<?php echo $member->mobile; ?>">+44
                    <?php
                    $data_zero = substr($member->mobile, 0, 1);
                    $data_left = substr($member->mobile, 1, 4);
                    $data_right = substr($member->mobile, 5, 9);
                    echo '('.$data_zero.') '.$data_left.' '.$data_right;
                    ?>
                    </a></p><?php endif; ?>
                  <p style="font-size: 14px; color: #E9E6F0; margin-top: 0px">
                    <a href="https://www.instagram.com/openmind_wellbeing" target="_blank" style="color: #3C3E44; text-decoration: none;">Instagram</a> |
                    <a href="https://www.facebook.com/openmind.wellbeing" target="_blank" style="color: #3C3E44; text-decoration: none;">Facebook</a> |
                    <a href="https://twitter.com/OM_OpenMind" target="_blank" style="color: #3C3E44; text-decoration: none;">Twitter</a> <br> 
                    <a style="color: #6C22E3; text-decoration: none; font-weight: bold;" href="https://openmindwellbeing.com" target="_blank">openmindwellbeing.com</a>
                  </p>
                </div>
              </div>
              <p style="font-size: 10px; color: #CCC9D1; width: 350px; text-align: justify">This email is for the designated recipient only and may contain privileged, proprietary, or otherwise confidential information. If you have received it in error, please notify the sender immediately and delete the original. Any other use of the e-mail by you is prohibited. We take reasonable care to ensure that our emails are not infected by any virus or other malicious software, but we do not guarantee this. OpenMind Wellbeing Limited is registered in England and Wales under registration number 11527799.
              </p>                
            </td>
          </tr>
        </table>
      </div>
      <span style="display: block; margin: 20px 0;">to here</span>
    <?php endforeach; ?>
  </body>
</html>
