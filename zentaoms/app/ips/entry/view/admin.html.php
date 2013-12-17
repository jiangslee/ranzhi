<?php include '../../common/view/header.admin.html.php';?>
<table class='table table-bordered table-hover table-striped'>
  <caption><?php echo $lang->entry->admin;?><span class='pull-right mr-10px'><?php echo html::a($this->inlink('create'), $lang->entry->create);?></span></caption>
  <thead>
    <tr class='colhead'>
      <th class='w-100px'><?php echo $lang->entry->name;?></th>
      <th class='w-80px'><?php echo $lang->entry->code;?></th>
      <th width='350'><?php echo $lang->entry->key;?></th>
      <th><?php echo $lang->entry->ip;?></th>
      <th class='w-100px'><?php echo $lang->actions;?></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($entries as $entry):?>
    <tr class='a-left'>
      <td><?php echo "<img src='$entry->logoPath' class='small-icon'>" . $entry->name?></td>
      <td><?php echo $entry->code?></td>
      <td><?php echo $entry->key?></td>
      <td><?php echo $entry->ip?></td>
      <td class='a-center'>
        <?php
        echo html::a($this->createLink('entry', 'edit',   "code=$entry->code"), $lang->edit);
        echo html::a($this->createLink('entry', 'delete', "code=$entry->code"), $lang->delete, 'class="deleter"');
        ?>
      </td>
    </tr>
    <?php endforeach;?>
  </tbody>
  <?php if(empty($entries)):?>
  <tfoot>
    <tr><td colspan="5"><div style="float:right; clear:none;" class="page"><?php echo $lang->entry->nothing?></div></td></tr>
  </tfoot>
  <?php endif;?>
</table>
<?php include '../../common/ext/view/footer.lite.html.php';?>
