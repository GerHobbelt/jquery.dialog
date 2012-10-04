<h2>local content with drag</h2>

<div class="well">
	<button class="btn btn-primary" id="ex-open-dialog">Open the Dialog</button>
</div>

<h5>html</h5>
<pre class="prettyprint language-html">
&lt;button class=&quot;btn btn-primary&quot; id=&quot;ex-open-dialog&quot;&gt;Open the Dialog&lt;/button&gt;

&lt;div class=&quot;modal&quot; style=&quot;display:none&quot; id=&quot;ex-local-content&quot;&gt;
	&lt;div class=&quot;modal-header&quot;&gt;
		&lt;button class=&quot;close clearfix&quot;&gt;&amp;times;&lt;/button&gt;
		&lt;h3&gt;I am a dialog from local content&lt;/h3&gt;
	&lt;/div&gt;
	&lt;div class=&quot;modal-body&quot;&gt;
		&lt;small&gt;I can have anything in here. I am completely customizable.&lt;/small&gt;
	&lt;/div&gt;
&lt;/div&gt;</pre>
	
<h5>javascript</h5>
<pre class="prettyprint language-javascript">
$(function() {
	
	$('#ex-open-dialog').click(function () {
		
		var dialogOptions = {
			url: '#local-content'
		};
		
		var defaultDialog = new dialog(dialogOptions);
		
	});	
}</pre>

<div class="modal" style="display:none" id="local-content">
	<div class="modal-header">
		<button class="close clearfix">&times;</button>
		<h3>I am a dialog from local content</h3>
	</div>
	<div class="modal-body">
		<small>I can have anything in here. I am completely customizable.</small>
	</div>
</div>

<script type="text/javascript">
$(function() {
	
	$('#ex-open-dialog').click(function () {
		
		var dialogOptions = {
			url: '#local-content'
		};
		
		var defaultDialog = new dialog(dialogOptions);
		
	});	
});
</script>