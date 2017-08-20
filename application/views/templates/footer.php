
<script src="<?php echo base_url().'assets/js/jquery.min.js' ?>"></script>
<script src="<?php echo base_url().'assets/js/jquery-ui.js' ?>"></script>

<!-- <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/ui-darkness/jquery-ui.css" rel="stylesheet"> -->
<!--<script src="--><?php //echo base_url().'assets/js/jquery.min.js'?><!--"></script>-->
<script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
<script>
    $( function popform(){
        $( "#firstform" ).dialog({
            autoOpen: false,
            show: 'fade',
            resizable: false,
            position: 'center',
            stack: true,
            height: 'auto',
            width: '500px',
            modal: true
        });


        $('#datepicker').datepicker({
            dateFormat:'yy-mm-dd'
        });

    } );
    $( "#opener" ).on( "click", function() {
        $( "#firstform" ).dialog( "open" );
    });
    $(document).ready(function () {
        $('#firstform').submit(function(event){
            var formData={
                'name':$('input[name=name]').val(),
                'address':$('input[name=address]').val(),
                'dob':$('input[name=dob]').val(),
                'contact':$('input[name=contact]').val()
            };
            $.ajax({
                type:'POST',
                url:'<?php echo site_url('tasks/store')?>',
                data:formData,
                dataType:'json',
                encode:true,

                // success:window.location.href=
                // "<?php echo site_url('tasks')?>"
               // success:alert('success')+$('#firstform').trigger('reset')
               // success:$("#firstform").dialog("close")
               // success:$.load("<?php echo base_url('tasks/loadView') ?>",
               //  function(data){
               //      $("#resulttable").html(data);
               //  })
            success:$('#resulttable')
            .load("<?php echo base_url('tasks/loadView');?>")+$("#firstform").dialog("close")

              // window.location.href("<?php echo site_url('tasks/')?>";
            })
            event.preventDefault();



        });

    });



</script>
</body>
<footer>
    <em>&copy <?php echo date('Y')?></em>
</footer>
</html>
