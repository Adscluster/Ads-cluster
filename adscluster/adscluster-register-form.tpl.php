<?php $form['contact']['#printed']= TRUE;?>
<table>
 <thead><th><?php print t('Contact Details');?><th></th></th>
  <tbody>
    <tr><td ><?php print drupal_render($form['contact']['name']); ?></td><td><?php print drupal_render($form['contact']['email']);?></td></tr>
  	<tr><td rowspan="2"><?php print drupal_render($form['contact']['password']); ?></td><td ><?php print drupal_render($form['contact']['mobile']); ?></td></tr>
  	<tr><td><?php print drupal_render($form['contact']['picture'] ); ?></td></tr>
  </tbody>
</table>
<?php $form['location']['#printed']= TRUE;?>
<table>
  	<thead><th><?php print t('Location Details');?><th></th></th>
  <tbody>
  	<tr><td width="180"><?php print drupal_render($form['location']['state']); ?>
  		<?php print drupal_render($form['location']['city']); ?>
  		<?php print drupal_render($form['location']['area']); ?>
  	</td>
  	<td><?php print drupal_render($form['location']['address']); ?>
  	<?php print drupal_render($form['location']['landmark']); ?></td></tr>
  </tbody>
</table>
<table>
	<thead><th><?php print t('Ad Details');?></th>
	<tbody>
		<tr><td><?php print drupal_render($form['category']); ?>
  		<?php print drupal_render($form['brand']); ?>
  </td></tr>
	</tbody>
</table>
<?php print drupal_render_children($form); ?>