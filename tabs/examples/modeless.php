<p>
    Non-modal or modeless dialog boxes are used when the requested information is not essential to continue, and so the window can be left open while work continues elsewhere.
</p>
<h2>modeless</h2>

<div class="well">
    <button class="btn btn-primary" id="modeless-open-dialog">Open the Dialog</button>
</div>

<h5>html</h5>
<pre class="prettyprint language-html">
&lt;button class=&quot;btn btn-primary&quot; id=&quot;modeless-open-dialog&quot;&gt;Open the Dialog&lt;/button&gt;</pre>
	
<h5>javascript</h5>
<pre class="prettyprint language-javascript">
$(function() {
	
    $('#modeless-open-dialog').click(function () {

        var dialogOptions = {
            url: 'ajax.html',
            modal: false
        };

        var modeless = new Dialog(dialogOptions);
    });	
}</pre>

<script type="text/javascript">
$(function() {
	
    $('#modeless-open-dialog').click(function () {

        var dialogOptions = {
            url: 'ajax.html',
            modal: false
        };

        var modeless = new Dialog(dialogOptions);
    });	
});
</script>