$(document).ready(function(e) {
	$('.task_status').click(function(e) {

		// Default task status
		var status = '0';

		// Checks the status of checkbox
		if ($(this).is(':checked')) {
			status = '1';
		}

		// Sets hidden fields values
		$('#taskId').val(this.value);
		$('#taskStatus').val(status);

		// Submits the form
		$("#updateTask").submit();
	});

	$('#task_cat').change(function(e) {
		if (this.value == 'complete') {
			$('.incomplete').css("display","none");
			$('.complete').css("display","block");
		} else if (this.value == 'incomplete') {
			$('.complete').css("display","none");
			$('.incomplete').css("display","block");
		} else {
			$('.complete,.incomplete').css("display","block");
		}
	});
});