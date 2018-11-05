<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

    <!-- page specific plugin scripts -->
	<script src="<?=base_URL()?>_backend/aceadmin/js/jquery.nestable.min.js"></script>

   <!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($){
			
				$('.dd').nestable();
			
				$('.dd-handle a').on('mousedown', function(e){
					e.stopPropagation();
				});
				
				$('[data-rel="tooltip"]').tooltip();
			
			});
		</script>
