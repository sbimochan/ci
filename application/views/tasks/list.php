<table class="table table-bordered" >

    <thead>
    <tr>

        <td>name</td>
        <td>address</td>
        <td>dob</td>
        <td>phone</td>
        <td>action</td>


    </tr>
    </thead>
    <tbody>
    <?php foreach($tasks as $task):
      ?>
    <tr id="<?php echo $task['id']?>">
          <td><a href="<?php echo site_url('tasks/show_row/'.$task['id'])?>"><?php echo $task['name']?></a></td>
        <td><?php echo $task['address']?></td>
        <td><?php echo $task['dob']?></td>
        <td><?php echo $task['contact']?></td>
        <td>
            <a class="btn btn-warning" href=
            "<?php echo site_url('tasks/edit_row/'.$task['id'])?>">
                Edit</a>

                <button class="btn btn-danger delete" data-bimochan="<?php echo $task['id']?>">
                  <i class="glyphicon glyphicon-remove"></i></button>


              </td>

    </tr>
    <?php endforeach;?>
    </tbody>
</table>
