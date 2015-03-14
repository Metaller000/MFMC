<?php
    include('core/init.inc.php');
    $info = fetch_server_info($config['server']['ip'], $config['server']['port']);
?>

<div>
    <?php 
        echo '<br/>'. $config['server']['ip'] .'';
        if ($info === false)
        { 
            echo '<br/>Статус: <font color = "#CC0000">Offline</font>';
        }
        else
        {
            echo '<br/>Статус: <font color = "#009900">Online</font>'; 
            reset($moderators);
            while (list ($rr, $val) = each ($moderators) ) :
            $key = array_search($val, $info['playerList']);
            
            if ($key > 0)
            { 
                $str = "<font color = '#CC0000'>";
                $str .= $info['playerList'][$key];
                $str .= "</font>";
                unset($info['playerList'][$key]);
                array_unshift($info['playerList'], $str );
            }
            endwhile;
            reset($admins);
            while (list ($rr, $val) = each ($admins) ) :
            $key = array_search($val, $info['playerList']);
            
            if ($key > 0)
            { 
                $str = "<font color = '#CC0000'>";
                $str .= $info['playerList'][$key];
                $str .= "</font>";
                unset($info['playerList'][$key]);
                array_unshift($info['playerList'], $str );
            }
                endwhile;
        }
     
        function get_user_ip()
        {
          if ( getenv('REMOTE_ADDR') ) $user_ip = getenv('REMOTE_ADDR');
          elseif ( getenv('HTTP_FORWARDED_FOR') ) $user_ip = getenv('HTTP_FORWARDED_FOR');
          elseif ( getenv('HTTP_X_FORWARDED_FOR') ) $user_ip = getenv('HTTP_X_FORWARDED_FOR');
          elseif ( getenv('HTTP_X_COMING_FROM') ) $user_ip = getenv('HTTP_X_COMING_FROM');
          elseif ( getenv('HTTP_VIA') ) $user_ip = getenv('HTTP_VIA');
          elseif ( getenv('HTTP_XROXY_CONNECTION') ) $user_ip = getenv('HTTP_XROXY_CONNECTION');
          elseif ( getenv('HTTP_CLIENT_IP') ) $user_ip = getenv('HTTP_CLIENT_IP');
          $user_ip = trim($user_ip);
          if ( empty($user_ip) ) return false;
          if ( !preg_match("/^([1-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])(\.([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])){3}$/", $user_ip) ) return false;
          return $user_ip;
        }
        echo '<br/>Ваш IP: ' . get_user_ip() . '';
    ?>
</div>




