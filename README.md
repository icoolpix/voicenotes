<strong>Voicenotes</strong>
<p>
Record notes right from your browser!</p>
<p>This script can be integrated in your project or used as standalone to record voice notes</p>
<p>You will need to allow microphone access when prompted</p>

<strong>database schema</strong>
<pre>
CREATE TABLE IF NOT EXISTS `notes` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `audio_file` varchar(100) NOT NULL,
  `date_created` varchar(20) NOT NULL
);
<pre>