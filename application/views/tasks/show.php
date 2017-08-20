<?php foreach ($records as $record):?>
<h3><?php echo $record->name?> was born in <?php echo $record->dob?>. his contact
number is <?php echo $record->contact?> and he lives in <?php echo $record->address?></h3>
<?php endforeach;?>
<br>
<a href="<?php echo site_url('/tasks')?>" class="btn btn-success">go back</a>
