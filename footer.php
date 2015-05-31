	</div>
				<!-- END PAGE CONTENT-->
			</div>
		</div>
		<!-- END CONTENT -->
		<!-- BEGIN QUICK SIDEBAR -->
		<!--Cooming Soon...-->
		<!-- END QUICK SIDEBAR -->
	</div>
	<!-- END CONTAINER -->
	
		
	
	<!-- BEGIN FOOTER -->
	<div class="page-footer">
		<div class="page-footer-inner">
			 2014 &copy; ....
		</div>
		<div class="scroll-to-top">
			<i class="icon-arrow-up"></i>
		</div>
	</div>
	<!-- END FOOTER -->
</div>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="/assets/global/plugins/respond.min.js"></script>
<script src="/assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->

<script src="/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="/assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS --> <?php /**/ ?>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="/assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
<script src="/assets/global/scripts/datatable.js"></script>
<script src="/assets/admin/pages/scripts/ecommerce-orders.js"></script>
<!-- END PAGE LEVEL SCRIPTS --> 

 
 <script>
var tempo = new Number();
tempo = 4000;
function startCountdown(){
	 
	if((tempo - 1) >= 0){
		 
		var min = parseInt(tempo/60);
	 
		var seg = tempo%60;
		 
		if(min < 10){
			min = "0"+min;
			min = min.substr(0, 2);
		}
		if(seg <=9){
			seg = "0"+seg;
		}
	 
		horaImprimivel = '00:' + min + ':' + seg;
		
		// $('#messageTimeOut').html(  horaImprimivel);
		 
		 
 	setTimeout('startCountdown()',4000);
		 
		tempo--;

	 
	} else {
		window.location.href = 'http://backoffice.winnetclub.ec/admin.php?q=logout';
	}
}
 
startCountdown();


</script>
<script type="text/javascript">

function mudaCabeca(campo){
    var er = /[^0-9]/;
    if (er.test(campo)) {
		jQuery('div>a').click(function(){
			jQuery.alerts.dialogClass = 'alert-warning';
			jAlert('Unset Position', 'ATTENTION', function(){
			   jQuery.alerts.dialogClass = null;
			});
		});
    } else {
	   document.getElementById('campo').value = campo;	
	   document.forms["rede"].submit();
    }
}

function contaTabela(){
	jQuery('#tabela').submit();
}

jQuery(document).ready(function(){
	jQuery('[rel="popover"]').popover({animation: true, trigger: "hover", html :true, placement: 'top' });


jQuery('#dialog-message').dialog({
	autoOpen: true,
	modal: false,
	show: {
			effect: "blind",
			duration: 100
	},
	buttons: {
			Ok: function() {
					jQuery(this).dialog('close');
			}
	},
	position: { 
    my: 'top',
    at: 'top',
    of: $('#gradeBinaria')
  },
	width: 400
	
});
 

 });
					   
					   
 	jQuery(document).ready(function() { 

	 



   
           Metronic.init(); // init metronic core components
 Layout.init(); // init current layout
//Demo.init(); // init demo features
        //   EcommerceOrders.init();
		  
        });
    </script>
<!-- END JAVASCRIPTS -->






</body>
<!-- END BODY -->
</html>