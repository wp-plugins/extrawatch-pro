<?php
/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.0
 * @revision 718
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.extrawatch.com
 */
class ExtraWatchUsersWidget extends WP_Widget {

  function ExtraWatchUsersWidget()
  {
    $widget_ops = array('classname' => 'ExtraWatchUsersWidget', 'description' => 'Optional ExtraWatch widget which display most active users today' );
    $this->WP_Widget('ExtraWatchUsersWidget', 'ExtraWatch Users', $widget_ops);
  }

  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
    $title = $instance['title'];
  }

  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['title'] = $new_instance['title'];
    return $instance;
  }

  function widget($args, $instance)
  {
    $extraWatchPluginDir = realpath(dirname(realpath(__FILE__)).DS."..".DS."..".DS."..".DS."..".DS."..".DS."..".DS);
    include_once $extraWatchPluginDir.DS."modules".DS."mod_extrawatch_users" . DS . "mod_extrawatch_users.php";
    echo renderExtraWatchUsers();
  }

}

/*register widget */
function ExtraWatchUsersWidget_init()
{
  register_widget('ExtraWatchUsersWidget');
}


add_action('widgets_init', 'ExtraWatchUsersWidget_init');

