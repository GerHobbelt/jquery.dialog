<div class="tabbable">

	<ul class="nav nav-pills">
		<li class="active"><a href="#minimal" data-toggle="tab">minimal setup</a></li>
		<li><a href="#local" data-toggle="tab">local content</a></li>
		<li><a href="#spinner" data-toggle="tab">loading spinner</a></li>
	</ul>
	
	<h5>global definition</h5>
		<pre class="prettyprint language-javascript">
// You can define application-wide settings like this:
dialog.defaults.backgroundClass = 'modal-background';
dialog.defaults.closeButtonClass = 'close'</pre>

	<div class="tab-content">
	
		<div class="tab-pane active" id="minimal"><?php include('examples/minimal.php') ?></div>	 
		<div class="tab-pane" id="local"><?php include('examples/local.php') ?></div>
		
	</div>
</div>