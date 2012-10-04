<h2>position</h2>

<div class="well">
    <button class="btn btn-primary" id="position-open-dialog-event">Open the Dialog Based on Mouse Event</button><br/><br/>
    <button class="btn btn-primary" id="position-open-dialog-ui">Open the Dialog Based on jQuery UI Position</button>
</div>

<h5>html</h5>
<pre class="prettyprint language-html">
&lt;button class=&quot;btn btn-primary&quot; id=&quot;position-open-dialog-event&quot;&gt;Open the Dialog Based on Mouse Event&lt;/button&gt;&lt;br/&gt;&lt;br/&gt;
&lt;button class=&quot;btn btn-primary&quot; id=&quot;position-open-dialog-ui&quot;&gt;Open the Dialog Based on jQuery UI Position&lt;/button&gt;</pre>
<h5>javascript</h5>
<pre class="prettyprint language-javascript">
$(function() {
	
    // Position based on event.
    // Can be useful when used in combination with modeless windows
    $('#position-open-dialog-event').click(function (event) {

        var dialogEventOptions = {
            url: 'ajax.html',
            position: event
        };

        var positionEvent = new Dialog(dialogEventOptions);
    });	
    
    // Position based on jQuery UI Position object
    $('#position-open-dialog-ui').click(function () {

        var dialogUIOptions = {
            url: 'ajax.html',
            position: {
                my: 'center top',
                at: 'center top',
                of: window,
                offset: '0 20'
            }
        };

        var positionUI = new Dialog(dialogUIOptions);
    });		
}</pre>

<script type="text/javascript">
$(function() {
	
    $('#position-open-dialog-event').click(function (event) {

        var dialogEventOptions = {
            url: 'ajax.html',
            position: event
        };

        var positionEvent = new Dialog(dialogEventOptions);
    });	
    
    $('#position-open-dialog-ui').click(function () {

        var dialogUIOptions = {
            url: 'ajax.html',
            position: {
                my: 'center top',
                at: 'center top',
                of: window,
                offset: '0 20'
            }
        };

        var positionUI = new Dialog(dialogUIOptions);
    });	
});
</script>