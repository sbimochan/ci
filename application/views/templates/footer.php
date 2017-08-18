<em>&copy <?php echo date('Y')?></em>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>

<!--<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/ui-darkness/jquery-ui.css" rel="stylesheet">-->
<!--<script src="--><?php //echo base_url().'assets/js/jquery.min.js'?><!--"></script>-->
<script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
<script>
    $( function popform(){
        $( "#firstform" ).dialog({
            autoOpen: false,
            show: 'slide',
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
</script>
</body>
</html>