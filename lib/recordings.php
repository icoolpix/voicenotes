<?php include('config.php'); ?>

<?php $cards = $db->get('notes'); ?>

<table class="table">
    
    <?php foreach($cards as $row): ?>
    <tr>
        <td>
            <?php echo $row['name']; ?>
            <?php echo date('d M y H:i',$row['date_created']); ?>
        </td>
        <td>

                <audio src="recordings/<?php echo $row['audio_file']; ?>" controls="controls"></audio>

        </td>

        <td class="text-right">
            <i id="<?php echo $row['id']; ?>" class="glyphicon glyphicon-trash cursor deleteRecording"></i>
        </td>
    </tr>
    <?php endforeach; ?>
    
</table>
<script>
//delete recording
$('.deleteRecording').click(function () {
    if (confirm('Recording will be delete permanently. ')) {
        var id = $(this).attr('id');
        //var data = {note_id: id};
        $(this).closest('tr').fadeOut('slow');

        var dt = new FormData();
        dt.append('note_id', id);
        // fd.append('card', card_id);
        dt.append('data', event.target.result);

        $.ajax({
            type: 'POST',
            url: 'lib/delete_recording.php',
            data: dt,
            processData: false,
            contentType: false
        }).done(function (data) {
            //console.log(data);
            log.innerHTML += "\n" + data;
        });
    }
});</script>