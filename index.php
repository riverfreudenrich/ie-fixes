          <?php $ua = htmlentities($_SERVER['HTTP_USER_AGENT'], ENT_QUOTES, 'UTF-8'); if (preg_match('~MSIE|Internet Explorer~i', $ua) || (strpos($ua, 'Trident/7.0') !== false && strpos($ua, 'rv:11.0') !== false)) { ?>
            // IE Stuff Goes Here
          <?php } else { ?>
            // Everything Else
          <?php } ?>
