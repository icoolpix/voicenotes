<?php include('header.php'); ?>
<div class="container">

	<div class="row">
		<div class="col-lg-8">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="pull-left">
							<img src="assets/img/recorder.png" onclick="startRecording(this)" style="margin-top:-6px"/>
							<img src="assets/img/stop.png" onclick="stopRecording(this)" style="margin-top:-6px"/>
						</div>
						<div class="text-center">VoiceNotes</div>
					</div>
				</div>
				<div class="panel-body">
					<table class="table">
						<?php $cards = $db->get('notes'); ?>
						<?php foreach($cards as $row): ?>
							<tr>
								<td>
									<?php echo $row['name']; ?>
									<?php echo date('d M y H:i',$row['date_created']); ?>
								</td>
								<td class="" style="width:160px">

										<audio src="recordings/<?php echo $row['audio_file']; ?>" controls="controls"></audio>

									</div>
								</td>

								<td class="text-right">
									<i id="<?php echo $row['id']; ?>" class="glyphicon glyphicon-trash cursor deleteRecording""></i>
								</td>
							</tr>
						<?php endforeach; ?>
					</table>

				<div class="record-log">
					<pre id="log"></pre>
				</div>

				</div>
			</div>
		</div>
	</div>

	<ul id="recordingslist"></ul>

	<div class="player hidden"></div>

<?php include('footer.php'); ?>