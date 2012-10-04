<style scoped>
.modal-spinner {
    padding:60px;
    background:white;
    border-radius:6px;
    width: 100px;
    height: 60px;
}
</style>

<p>
    If your dialog windows take longer than 500ms to appear you should include the spinner.
    To use the spinner you must include spin.js: <a href="http://fgnass.github.com/spin.js" target="_blank">http://fgnass.github.com/spin.js.</a><br />
    This demo will load the spinner for 2 seconds then display the dialog.
</p>

<h2>loading spinner</h2>

<div class="well">
    <button class="btn btn-primary" id="spinner-open-dialog">Open the Dialog</button>
</div>

<h5>css</h5>
<pre class="prettyprint language-css">
.modal-spinner {
    padding:60px;
    background:white;
    border-radius:6px;
    width: 100px;
    height: 60px;
}
</pre>

<h5>html</h5>
<pre class="prettyprint language-html">
&lt;button class=&quot;btn btn-primary&quot; id=&quot;spinner-open-dialog&quot;&gt;Open the Dialog&lt;/button&gt;</pre>
	
<h5>javascript</h5>
<pre class="prettyprint language-javascript">
$(function() {
	
    $('#spinner-open-dialog').click(function () {

        var dialogOptions = {
            url: 'large-dialog.php',
            showSpinner: true,
            spinnerClass: 'modal-spinner'
        };

        var dWindow = new Dialog(dialogOptions);

    });	
});</pre>

<script type="text/javascript">
$(function() {
	
    $('#spinner-open-dialog').click(function () {

        var dialogOptions = {
            url: 'large-dialog.php',
            showSpinner: true,
            spinnerClass: 'modal-spinner'
        };

        var dWindow = new Dialog(dialogOptions);

    });	
});
</script>