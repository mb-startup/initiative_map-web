<?php
	/*
	Template name: Тест
	*/
?>
<?php 
	get_header();
?>
<div class="container content">
<form method="post" action="<?php bloginfo('template_url'); ?>/handler.php" class="form-horizontal">
<fieldset>
 
<!-- Form Name -->
<legend>Выдвинуть инициативу</legend>
 
<!-- Text input-->
<div class="form-group">
 <label class="col-md-4 control-label" for="title">Заголовок</label>
 <div class="col-md-4">
 <input id="title" name="title" type="text" placeholder="Введите заголовок" class="form-control input-md">
 <span class="help-block">Краткое описание статьи</span>
 <input id="desc" name="desc" type="text" placeholder="Введите краткое описание" class="form-control input-md">
 </div>
</div>
 
<!-- Select Basic -->
<label class="col-md-4 control-label" for="cat">Город</label>
<?php wp_dropdown_categories('hide_empty=0&title_li=&name=cat&hierarchical=1&exclude=1,9,19,20'); ?>
 
<!-- Textarea -->
<div class="form-group">
 <label class="col-md-4 control-label" for="description">Описание инициативы</label>
 <div class="col-md-4">
 <?php
$settings = array(
'textarea_name' => 'description',
'textarea_rows' => 5,
'quicktags' => false,
'media_buttons' => true,
'dfw' => true,
'tinymce' => array(
'toolbar1'=> 'bold,italic,underline,bullist,numlist,link,unlink,undo,redo'
)
);
wp_editor($contentFromPage, 'editpost', $settings);
?>
 </div>
</div>

 
<!-- Button -->
<div class="form-group">
 <label class="col-md-4 control-label" for="send"></label>
 <div class="col-md-4">
 <button id="send" name="send" class="btn btn-primary">Отправить</button>
 </div>
</div>
 
</fieldset>
</form>
</div>
<?php 
	get_footer();
?>
