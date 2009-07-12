<?php
if (!defined('RAPIDLEECH')) {
	require('../deny.php');
	exit;
}
// The English language file
// You should always use this file as a template for translating

$lang[1]	=	'Access Denied';
$lang[2]	=	'The server has refused to fulfill your request';
$lang[3]	=	'You didn\'t enter a valid e-mail address';
$lang[4]	=	'Size of parts are not numeric';
$lang[5]	=	'Unknown URL Type, <span class="font-black">Only Use <span class="font-blue">http</span> or <span class="font-blue">https</span> or <span class="font-blue">ftp</span> Protocol</span>';
$lang[6]	=	'Path is not specified for saving this file';
$lang[7]	=	'You are not allowed to leech from <span class="font-black">%1$s (%2$s)</span>';	// %1$s = host name %2$s = host ip
$lang[8]	=	'Redirecting to:';
$lang[9]	=	'Couldn\'t update the files list';
$lang[10]	=	'File <b>%1$s</b> (<b>%2$s</b>) Saved!<br />Time: <b>%3$s</b><br />Average Speed: <b>%4$s KB/s</b><br />';	// %1$s = filename %2$s = filesize %3$s = time of download %4$s = speed
$lang[11]	=	'<script>mail("File was sent to this address<b>%1$s</b>.", "%2$s");</script>';	// %1$s = E-mail address %2$s = filename
$lang[12]	=	'Error sending file!';
$lang[13]	=	'Go back to main';
$lang[14]	=	'Connection lost, file deleted.';
$lang[15]	=	'Reload';
$lang[16]	=	'Please change the debug mode to <b>1</b>';
$lang[17]	=	'Maximum No (%1$s) Of links have been reached.';	// %1$s = Number of maximum links
$lang[18]	=	'%1$s Link%2$s checked in %3$s seconds. (Method: <b>%4$s</b>)';	// %1$s = Number of links %2$s = Plural form %3$s = seconds %4$s = method for checking links
$lang[19]	=	's';	// End of a plural
$lang[20]	=	'Bad proxy server address';
$lang[21]	=	'Link';
$lang[22]	=	'Status';
$lang[23]	=	'Waiting';
$lang[24]	=	'Invalid URL';
$lang[25]	=	'Preparing';
$lang[26]	=	'Started';
$lang[27]	=	'Connection lost';
$lang[28]	=	'Finished';
$lang[29]	=	'Start auto Transload';
$lang[30]	=	'Frames not supported, update your browser';
$lang[31]	=	'Add links';
$lang[32]	=	'Links';
$lang[33]	=	'Options';
$lang[34]	=	'Transload files';
$lang[35]	=	'Use Proxy Settings';
$lang[36]	=	'Proxy';
$lang[37]	=	'UserName';
$lang[38]	=	'Password';
$lang[39]	=	'Use Imageshack Account';
$lang[40]	=	'Save To';
$lang[41]	=	'Path';
$lang[42]	=	'Use Premium Account';
$lang[43]	=	'Run Server Side';
$lang[44]	=	'Delay Time';
$lang[45]	=	'Delay (in seconds)';
$lang[46]	=	'No files or hosts selected for upload';
$lang[47]	=	'Select Hosts to Upload';
$lang[48]	=	'No Supported Upload Services!';
$lang[49]	=	'Upload windows';
$lang[50]	=	'Link save format';
$lang[51]	=	'Default';
$lang[52]	=	'Check All';
$lang[53]	=	'Un-Check All';
$lang[54]	=	'Invert Selection';
$lang[55]	=	'Name';
$lang[56]	=	'Size';
$lang[57]	=	'No files found';
$lang[58]	=	'Legend for link saving format: (case sensitive)';
$lang[59]	=	'The link for the download';
$lang[60]	=	'The name of the file';
$lang[61]	=	'Default link style';
$lang[62]	=	'Anything besides the ones stated above will be treated as string, you are unable to do multi line format now, a new line will be inserted for each link.';
$lang[63]	=	'Uploading file %1$s to %2$s';	// %1$s = filename %2$s = file host name
$lang[64]	=	'File %1$s does not exist.';	// %1$s = filename
$lang[65]	=	'File %1$s is not readable by script.';	// %1$s = filename
$lang[66]	=	'Filesize too big to upload to host.';
$lang[67]	=	'Upload service not allowed';
$lang[68]	=	'Download-Link';
$lang[69]	=	'Delete-Link';
$lang[70]	=	'Stat-Link';
$lang[71]	=	'Admin-Link';
$lang[72]	=	'USER-ID';
$lang[73]	=	'FTP upload';
$lang[74]	=	'Password';
$lang[75]	=	'Rapidleech PlugMod - Upload Links';
$lang[76]	=	'<div class="linktitle">Upload Links for <strong>%1$s</strong> - <span class="bluefont">Size: <strong>%2$s</strong></span></div>';	// %1$s = file name %2$s = file size
$lang[77]	=	'DONE';
$lang[78]	=	'Go Back';
$lang[79]	=	'Couldn\'t establish connection with the server %1$s.';		// %1$s = FTP server name
$lang[80]	=	'Incorrect username and/or password.';
$lang[81]	=	'Connected to: <b>%1$s</b>...';	// %1$s = FTP server name
$lang[82]	=	'The filetype %1$s is forbidden to be downloaded';	// %1$s = File type
$lang[83]	=	'File <b>%1$s</b>, Size <b>%2$s</b>...';	// %1$s = file name %2$s = file size
$lang[84]	=	'Error retriving the link';
$lang[85]	=	'Text passed as counter is string!';
$lang[86]	=	'ERROR: Please enable JavaScript.';
$lang[87]	=	'Please wait <b>%1$s</b> seconds...';	// %1$s = number of seconds
$lang[88]	=	'Couldn\'t connect to %1$s at port %2$s';	// %1$s = host name %2$s = port
$lang[89]	=	'Connected to proxy: <b>%1$s</b> at port <b>%2$s</b>...';	// %1$s = Proxy host %2$s = Proxy port
$lang[90]	=	'Connected to: <b>%1$s</b> at port <b>%2$s</b>...';	// %1$s = host %2$s = port
$lang[91]	=	'No header received';
$lang[92]	=	'You are forbidden to access the page!';
$lang[93]	=	'The page was not found!';
$lang[94]	=	'The page was either forbidden or not found!';
$lang[95]	=	'Error! it is redirected to [%1$s]';	// %1$s = redirected address
$lang[96]	=	'This site requires authorization. For the indication of username and password of access it is necessary to use similar url:<br />http://<b>login:password@</b>www.site.com/file.exe';
$lang[97]	=	'Resume limit exceeded';
$lang[98]	=	'This server doesn\'t support resume';
$lang[99]	=	'Download';
$lang[100]	=	'This premium account is already in use with another ip.';
$lang[101]	=	'File %1$s cannot be saved in directory %2$s';	// %1$s = file name %2$s = directory name
$lang[102]	=	'Try to chmod the folder to 777.';
$lang[103]	=	'Try again';
$lang[104]	=	'File';
$lang[105]	=	'It is not possible to carry out a record in the file %1$s';	// %1$s = file name
$lang[106]	=	'Invalid URL or unknown error occured';
$lang[107]	=	'You have reached the limit for Free users.';
$lang[108]	=	'The download session has expired';
$lang[109]	=	'Wrong access code.';
$lang[110]	=	'You have entered a wrong code too many times';
$lang[111]	=	'Download limit exceeded';
$lang[112]	=	'Error READ Data';
$lang[113]	=	'Error SEND Data';
$lang[114]	=	'Active';
$lang[115]	=	'Unavailable';
$lang[116]	=	'Dead';
$lang[117]	=	'You need to load/activate the cURL extension (http://www.php.net/cURL) or you can set $fgc = 1 in config.php.';
$lang[118]	=	'cURL is enabled';
$lang[119]	=	'PHP version 5 is recommended although it is not obligatory';
$lang[120]	=	'Check if your safe mode is turned off as the script cannot work with safe mode on';
$lang[121]	=	'Sending file <b>%1$s</b>';	// %1$s = filename
$lang[122]	=	'No need spliting, Send single mail';
$lang[123]	=	'Spliting into %1$s part size';	// %1$s = part size
$lang[124]	=	'Method';
$lang[125]	=	'Sending part <b>%1$s</b>';	//%1$s = part number
$lang[126]	=	'No need spliting, Send single mail';
$lang[127]	=	'No host file found';
$lang[128]	=	'Cannot create hosts file';
$lang[129]	=	'hours';	// Plural
$lang[130]	=	'hour';
$lang[131]	=	'minutes';	// Plural
$lang[132]	=	'minute';
$lang[133]	=	'seconds';	// Plural
$lang[134]	=	'second';
$lang[135]	=	'getCpuUsage(): couldn\'t access STAT path or STAT file invalid';
$lang[136]	=	'CPU Load';
$lang[137]	=	'An error occured';
$lang[138]	=	'Select at least one file.';
$lang[139]	=	'Emails';
$lang[140]	=	'Send';
$lang[141]	=	'Delete successful submits';
$lang[142]	=	'Split by Parts';
$lang[143]	=	'Parts Size';
$lang[144]	=	'<b>%1$s</b> - Invalid E-mail Address.';	// %1$s = email address
$lang[145]	=	'File <b>%1$s</b> is not found!';	// %1$s = filename
$lang[146]	=	'Couldn\'t update files list!';
$lang[147]	=	'File deletion is disabled';
$lang[148]	=	'Delete files';
$lang[149]	=	'Yes';
$lang[150]	=	'No';
$lang[151]	=	'File <b>%1$s</b> Deleted';	// %1$s = filename
$lang[152]	=	'Error deleting the file <b>%1$s</b>!';	// %1$s = filename
$lang[153]	=	'Host';
$lang[154]	=	'Port';
$lang[155]	=	'Directory';
$lang[156]	=	'Delete source file after successful upload';
$lang[157]	=	'Copy Files';
$lang[158]	=	'Move Files';
$lang[159]	=	'Cannot locate the folder <b>%1$s</b>';	// %1$s = directory name
$lang[160]	=	'File %1$s successfully uploaded!';	// %1$s = filename
$lang[161]	=	'Time';
$lang[162]	=	'Average speed';
$lang[163]	=	'Couldn\'t upload the file <b>%1$s</b>!';	// %1$s = filename

?>