<?php
/**
 * The index view file of index module of ZenTaoMS.
 *
 * @copyright   Copyright 2013-2014 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     商业软件，非开源软件
 * @author      Yidong Wang <yidong@cnezsoft.com>
 * @package     index 
 * @version     $Id$
 * @link        http://www.zentao.net
 */
include "../../common/view/header.lite.html.php";
css::import($themeRoot . 'default/ips.css');
js::import($jsRoot . 'jquery/ips.js');
?>
  <!-- Desktop -->
  <div id='desktop'  unselectable="on" style="-moz-user-select:none;-webkit-user-select:none;" onselectstart="return false;">
    <div id='leftBar' class='dock-left'>
      <div id='apps-menu'>
        <ul class='bar-menu'></ul>
      </div>
      <div class='dock-bottom'>
        <div id='apps-actions'>
          <ul class='bar-menu'>
            <li><a class='app-btn' data-id='allapps' href='javascript:;' id='allAppsBtn' title='<?php echo $lang->index->allEntries?>'><i class='icon-th-list'></i></a></li>
            <li><a href='admin.php?m=entry&f=create' target='_blank' id='addAppBtn' title='<?php echo $lang->index->addEntry?>'><i class='icon-plus-sign'></i></a></li>
          </ul>
        </div>
        <div id='avatar' title='<?php echo $lang->index->profile?>' class='app-btn' data-id='profile'>
          <img class='avatar-img' src='<?php echo $themeRoot . 'default/images/ips/avatar.jpg'?>' alt=''>
          <div class='avatar-name'><?php echo $app->user->realname?></div>
        </div>        
      </div>
    </div>
    <div id='bottomBar' class='dock-bottom'>
      <div id='systemMenu'>
        <!-- <ul class='bar-menu'>
          <li><a href='###' class='app-btn' title='<?php echo $lang->index->set?>' data-id='setting'><i class='icon-cog icon-large'></i></a></li>
          <li><a href='###' class='app-btn' title='<?php echo $lang->index->theme?>' data-id='themes'><i class='icon-dashboard icon-large'></i></a></li>
        </ul> -->
      </div>
      <div id='taskbar'>
        <ul class='bar-menu'>
        </ul>
      </div>
    </div>
    <div id='deskContainer'>
      <div id='win-allapps' class='window window-fullscreen window-min' data-id='allapps'>
        <div class='all-apps-panel'>
          <div class='all-apps-head'>
            <div class='row'>
              <div class='col-md-1'>
                <a href='###' id='closeAllApps' class='min-win'><i class='icon-circle-arrow-left'></i></a>
              </div>
              <div class='col-md-3'>
                <h4>
                <i class='icon-th-list'></i> <?php echo $lang->index->allEntries?> &nbsp;<small class='muted'><?php echo $lang->index->countEntries?></small></h4>
              </div>
              <div class='col-md-4'>
                <div class='input-group'>
                  <input type='text' class='form-control-clear form-control'>
                  <span class='input-group-btn'>
                    <button class='btn btn-clear' type='button'><i class='icon-search'></i></button>
                  </span>
                </div>
              </div>
              <div class='col-md-4 text-right'>
                <a class='btn btn-clear' href='admin.php?m=entry&f=create' target='_blank'><i class='icon-plus'></i> <?php echo $lang->index->addEntry?></a>
              </div>
            </div>        
          </div>
          <div class='all-apps-list' id="allAppsList">
            <ul class='bar-menu'>
            </ul>
          </div>
        </div>
      </div>      
    </div>
  </div>
<script>
var entries = new Array(
    {
        id          : 'allapps',
        title       : '<?php echo $lang->index->allEntries?>',
        type        : 'none',
        description : '<?php echo $lang->index->allEntries?>',
        display     : 'fullscreen',
        systemapp   : true,
        menu        : false
    },
    {
        id          : 'profile',
        url         : '<?php echo $this->createLink('user', 'profile')?>',
        title       : '<?php echo $lang->user->profile?>',
        type        : 'iframe',
        description : '<?php echo $lang->index->profile?>',
        systemapp   : true,
        menu        : false
    }
);

<?php echo $allEntries;?>
var leftBarEntry = '<?php echo $leftEntry?>';
// $(function(){$('.apps-count').text(entryCount)})
</script>
<?php
if($config->debug) js::import($jsRoot . 'jquery/form/min.js');
?>
</body>
</html>
