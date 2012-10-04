<!DOCTYPE html>
<html>
<head>
    <title>jQuery Dialog</title>

    <link rel="stylesheet" type="text/css" href="bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
    <script type="text/javascript" src="prettify.js"></script>
    <script type="text/javascript" src="bootstrap.js"></script>
    <script type="text/javascript" src="spin.min.js"></script>
    <script type="text/javascript" src="jquery.dialog.js"></script>
	
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
        <div style="margin:30px 0">
            version 1.0
            &nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="https://github.com/jamiller619/jquery.dialog">GitHub Project</a>
            &nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="http://jamiller.me">Created by Jeff Miller</a>
        </div>
    </div>
	
    <div class="tabbable">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#options" data-toggle="tab">options api</a></li>
            <li><a href="#events" data-toggle="tab">events api</a></li>
            <li><a href="#examples" data-toggle="tab">examples</a></li>
        </ul>
        
        <div class="tab-content">
            <div class="tab-pane active" id="options"><?php include('tabs/options.php') ?></div>
            <div class="tab-pane" id="examples"><?php include('tabs/examples.php') ?></div>
            <div class="tab-pane" id="events"><?php include('tabs/events.php') ?></div>
        </div>    
    </div>

    <script type="text/javascript">
        $(function() {
            prettyPrint();

            Dialog.defaults.backgroundClass = 'modal-backdrop';
            Dialog.defaults.closeButtonClass = 'dialog-close';

            $('#open-dialog').click(function () {

                var dialogOptions = {
                    url: 'ajax.html'
                };

                var defaultDialog = new Dialog(dialogOptions);
            });
        });
    </script>

</body>
</html>