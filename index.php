<!DOCTYPE html>
<html>
<head>
    <title>jQuery Dialog</title>

    <link rel="stylesheet" type="text/css" href="assets/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="assets/style.css" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/prettify.js"></script>
    <script type="text/javascript" src="assets/bootstrap.js"></script>
    <script type="text/javascript" src="assets/spin.min.js"></script>
    <script type="text/javascript" src="jquery.dialog.js"></script>
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-19183133-1']);
	  _gaq.push(['_setDomainName', 'jamiller.me']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</head>
<body>
    <div class="header">
        <h1>jQuery Dialog. A simple, no-frills dialog plugin.</h1>
        <div class="btn-group">
            <a class="btn dropdown-toggle btn-primary" data-toggle="dropdown" href="javascript:;">
                Download tha Hotness
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="jquery.dialog.js" target="_blank">For use in Bootstrap</a></li>
                <li><a href="jquery.dialog.js" target="_blank">Without Bootstrap (includes css file)</a></li>
            </ul>
        </div>
        <div class="well header-details">
            version 1.0
            &nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="https://github.com/jamiller619/jquery.dialog">GitHub Project</a>
            &nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="http://jamiller.me">Created by Jeff Miller</a>
            &nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="http://jamiller.me/2012/10/04/jquery-dialog-a-simple-no-frills-dialog-plugin/">Comments / Suggestions</a>
        </div>
    </div>
	
    <div class="tabbable">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#options" data-toggle="tab">options api</a></li>
            <li><a href="#events" data-toggle="tab">events api</a></li>
            <li><a href="#examples" data-toggle="tab">examples</a></li>
        </ul>
        
        <div class="tab-content">
            <div class="tab-pane active" id="options"><?php include('assets/tabs/options.php') ?></div>
            <div class="tab-pane" id="examples"><?php include('assets/tabs/examples.php') ?></div>
            <div class="tab-pane" id="events"><?php include('assets/tabs/events.php') ?></div>
        </div>    
    </div>

    <script type="text/javascript">
        $(function() {
            prettyPrint();

            Dialog.defaults.backgroundClass = 'modal-backdrop';
            Dialog.defaults.closeButtonClass = 'dialog-close';

            $('#open-dialog').click(function () {

                var dialogOptions = {
                    url: 'assets/ajax.html'
                };

                var defaultDialog = new Dialog(dialogOptions);
            });
            
            // Javascript to enable link to tab
            /*var url = document.location.toString();
            if (url.match('#'))
            {
                $('.nav-tabs a[href=#'+url.split('#')[1]+']').tab('show');
            } 

            // Change hash for page-reload
            $('.nav-tabs a').on('shown', function (e)
            {
                window.location.hash = e.target.hash;
                window.scrollTo(0, 0);
            });*/
        });
    </script>

</body>
</html>