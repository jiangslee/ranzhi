<?php
/**
 * The forum module zh-tw file of RanZhi.
 *
 * @copyright   Copyright 2009-2016 青島易軟天創網絡科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     forum
 * @version     $Id: zh-tw.php 4029 2016-08-26 06:50:41Z liugang $
 * @link        http://www.ranzhico.com
 */
if(!isset($lang->forum)) $lang->forum = new stdclass();
$lang->forum->common      = '論壇';
$lang->forum->index       = '論壇首頁';
$lang->forum->board       = '版塊';
$lang->forum->owners      = '版主';
$lang->forum->threadList  = '主題列表';
$lang->forum->threadCount = '主題數';
$lang->forum->postCount   = '帖子數';
$lang->forum->noPost      = '暫無主題';
$lang->forum->lastPost    = '最後發表: %s by %s';
$lang->forum->readonly    = '只讀版塊。';
$lang->forum->notExist    = '版塊不存在。';
$lang->forum->lblOwner    = " [ 版主：%s ]";

$lang->forum->post   = '發貼';
$lang->forum->admin  = '論壇維護';
$lang->forum->update = '更新數據';

$lang->forum->updateDesc    = '該更新操作會重新計算每個版塊的發貼數據。';
$lang->forum->successUpdate = '更新數據成功';

/* Adjust the pager. */
$lang->pager->noRecord      = '';
$lang->pager->digest        = str_replace('記錄', '主題', $lang->pager->digest);
$lang->pager->settedInForum = true;    // Set this switch thus in thread module can avoid overiding them.
