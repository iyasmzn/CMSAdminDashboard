<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Datepicker JsUi -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- Botstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<!-- Summernote -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/js/jasny-bootstrap.min.js"></script>
<!-- Template -->
<script type="text/javascript" src="/project/CMSAdminDashboard/tmp/architectui/assets/scripts/main.js"></script>
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<!-- MyScript -->
<script type="text/javascript">
	$( function() {
	$( "#datepicker" ).datepicker({
		showAnim: 'slideDown',
		changeMonth: true,
		changeYear: true,
		minDate: '-3Y -1M', maxDate: "+5Y +1M +10D",
		dateFormat: 'DD, d MM, yy'
	});
	});
	$(document).ready(function() {
		$('#table_id').DataTable();
		$('.fileinput').fileinput();
		$('#summernote').summernote({
			placeholder: 'Write here...',
			height: 300
		});
		$('.category-select2').select2({
			width: 300
		});
	});
</script>
