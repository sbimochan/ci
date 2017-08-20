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
    <?php foreach($tasks as $task):?>
    <tr>

        <td><a href="<?php echo site_url('tasks/show_row/'.$task['id'])?>"><?php echo $task['name']?></a></td>
        <td><?php echo $task['address']?></td>
        <td><?php echo $task['dob']?></td>
        <td><?php echo $task['contact']?></td>
        <td>
            <a class="btn btn-warning" href=
            "<?php echo site_url('tasks/edit_row/'.$task['id'])?>">
                Edit</a>
            <a class="btn btn-danger"  href=
            "<?php echo site_url('tasks/delete_row/'.$task['id'])?>">
                Delete</a></td>

    </tr>
    <?php endforeach;?>
    </tbody>
</table>