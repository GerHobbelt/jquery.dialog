<style scoped>
.dialog-scroll {
    overflow-x:hidden;
    overflow-y:scroll;
}
</style>
<p>
    Sometimes the modal body cannot fit all the content.
</p>
<div class="alert alert-info">
    Be careful when using this option in addition to the height parameter.<br/>
    It's probably best practice to always use the same body class for your dialogs with overflow set in css.
</div>
<h2>scrollable content</h2>

<div class="well">
    <button class="btn btn-primary" id="scrollable-open-dialog">Open the Dialog</button>
</div>

<h5>html</h5>
<pre class="prettyprint language-html">
&lt;button class=&quot;btn btn-primary&quot; id=&quot;scrollable-open-dialog&quot;&gt;Open the Dialog&lt;/button&gt;</pre>
	
<h5>javascript</h5>
<pre class="prettyprint language-javascript">
$(function() {
	
    $('#scrollable-open-dialog').click(function () {

        var dialogOptions = {
            url: 'scrollable.html',
            scrollContainer: '.modal-body'
        };

        var scrollable = new Dialog(dialogOptions);
    });	
}</pre>

<h5>css</h5>
<pre class="prettyprint language-css">
.dialog-scroll {
    overflow-x:hidden;
    overflow-y:scroll;
}
</pre>

<script type="text/javascript">
$(function() {
	
    $('#scrollable-open-dialog').click(function () {

        var dialogOptions = {
            url: 'scrollable.html',
            scrollContainer: '.modal-body'
        };

        var scrollable = new Dialog(dialogOptions);
    });	
});
</script>