<!DOCTYPE html>
<html>
<head>
	<title>jQuery Dialog</title>
	
	<link rel="stylesheet" type="text/css" href="bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript" src="prettify.js"></script>
	<script type="text/javascript" src="bootstrap.js"></script>
	<script type="text/javascript" src="jquery.dialog.js"></script>
	
</head>
<body>
	<div class="header">
		<div>
			<h1>jQuery Dialog. A simple, no-frills dialog plugin.</h1>
			<button class="btn btn-primary">Download tha Hotness</button>
		</div>
	</div>
	
	<div class="tabbable">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#options" data-toggle="tab">options api</a></li>
			<li><a href="#examples" data-toggle="tab">examples</a></li>
			<li><a href="#events" data-toggle="tab">events</a></li>
		</ul>
		<div class="tab-content">
	  
			<div class="tab-pane active" id="options"><?php include('tabs/options.php') ?></div>
		 
			<div class="tab-pane" id="examples"><?php include('tabs/examples.php') ?></div>
	  </div>
	</div>
	
	<script type="text/javascript">
		$(function() {
			
			prettyPrint();
			
			dialog.defaults.backgroundClass = 'modal-backdrop';
			dialog.defaults.closeButtonClass = 'close';
		
			$('#open-dialog').click(function () {
		
				var dialogOptions = {
					url: 'ajax.html',
					closeButtonClass: 'close'
				};
				
				var defaultDialog = new dialog(dialogOptions);
				
			});
			
		});
	</script>

</body>
</html>