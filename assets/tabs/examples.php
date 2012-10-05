<div class="tabbable">

    <ul class="nav nav-pills">
        <li class="active"><a href="#minimal" data-toggle="tab">minimal setup</a></li>
        <li><a href="#local" data-toggle="tab">local content with drag</a></li>
        <li><a href="#position" data-toggle="tab">position</a></li>
        <li><a href="#spinner" data-toggle="tab">loading spinner</a></li>
        <li><a href="#modeless" data-toggle="tab">modeless</a></li>
        <li><a href="#scrollable" data-toggle="tab">scrollable content</a></li>
    </ul>

    <h5>global definition</h5>
    <pre class="prettyprint language-javascript">
// You can define plugin-wide settings like this:
Dialog.defaults.backgroundClass = 'modal-backdrop';
Dialog.defaults.closeButtonClass = 'dialog-close';</pre>

    <div class="tab-content">

        <div class="tab-pane active" id="minimal"><?php include('examples/minimal.php') ?></div>	 
        <div class="tab-pane" id="local"><?php include('examples/local.php') ?></div>
        <div class="tab-pane" id="spinner"><?php include('examples/spinner.php') ?></div>
        <div class="tab-pane" id="modeless"><?php include('examples/modeless.php') ?></div>        
        <div class="tab-pane" id="scrollable"><?php include('examples/scrollable.php') ?></div>
        <div class="tab-pane" id="position"><?php include('examples/position.php') ?></div>
        
    </div>
</div>