<?php include('header.php'); ?>
<div class="container">

	<div class="row">
		<div class="col-lg-8">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="pull-left">
							<button class="btn btn-primary btn-xs startRec" onclick="startRecording(this)" style="margin-top:-6px">
                                <img src="assets/img/recorder.png"/>
                            </button>
                            <button class="btn btn-danger btn-xs stopRec" onclick="stopRecording(this)" style="margin-top:-6px">
                                <img src="assets/img/stop.png"/>
                            </button>
						</div>
						<div class="text-center">VoiceNotes</div>
					</div>
				</div>
				<div class="panel-body">
                    
                    <div class="recordings"></div>
                    
				<div class="record-log">
					<pre id="log"></pre>
				</div>

				</div>
			</div>
		</div>
	</div>
<?php include('footer.php'); ?>