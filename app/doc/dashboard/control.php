<?php
/**
 * The control file of dashboard module of RanZhi.
 *
 * @copyright   Copyright 2009-2016 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Yidong Wang <yidong@cnezsoft.com>
 * @package     dashboard
 * @version     $Id$
 * @link        http://www.ranzhico.com
 */
class dashboard extends control
{
    /**
     * Dsahboard Index page.
     * 
     * @access public
     * @return void
     */
    public function index()
    {
        $appName = $this->app->getAppName();
        $entry   = $this->loadModel('entry', 'sys')->getByCode($appName);

        $this->view->title   = $entry->name;
        $this->view->appName = $appName;
        $this->display();
    }
}
