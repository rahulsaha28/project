<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="robots" content="noindex">
<title>Export - Adminer</title>
<link rel="stylesheet" type="text/css" href="adminer-4.6.2.php?file=default.css&amp;version=4.6.2">
<script src='adminer-4.6.2.php?file=functions.js&amp;version=4.6.2' nonce="ODU4NjI0NzllM2YxMzIxYjQ5ZDQ1OTlkNzc1NzFlYjY="></script>
<link rel="shortcut icon" type="image/x-icon" href="adminer-4.6.2.php?file=favicon.ico&amp;version=4.6.2">
<link rel="apple-touch-icon" href="adminer-4.6.2.php?file=favicon.ico&amp;version=4.6.2">

<body class="ltr nojs">
<script nonce="ODU4NjI0NzllM2YxMzIxYjQ5ZDQ1OTlkNzc1NzFlYjY=">
mixin(document.body, {onkeydown: bodyKeydown, onclick: bodyClick});
document.body.className = document.body.className.replace(/ nojs/, ' js');
var offlineMessage = 'You are offline.';
var thousandsSeparator = ',';
</script>

<div id="help" class="jush-sql jsonly hidden"></div>
<script nonce="ODU4NjI0NzllM2YxMzIxYjQ5ZDQ1OTlkNzc1NzFlYjY=">mixin(qs('#help'), {onmouseover: function () { helpOpen = 1; }, onmouseout: helpMouseout});</script>

<div id="content">
<p id="breadcrumb"><a href="adminer-4.6.2.php">MySQL</a> &raquo; <a href='adminer-4.6.2.php?username=root' accesskey='1' title='Alt+Shift+1'>Server</a> &raquo; Export
<h2>Export</h2>
<div id='ajaxstatus' class='jsonly hidden'></div>

<form action="" method="post">
<table cellspacing="0">
<tr><th>Output<td><label><input type='radio' name='output' value='text' checked>open</label><label><input type='radio' name='output' value='file'>save</label><label><input type='radio' name='output' value='gz'>gzip</label>
<tr><th>Format<td><label><input type='radio' name='format' value='sql' checked>SQL</label><label><input type='radio' name='format' value='csv'>CSV,</label><label><input type='radio' name='format' value='csv;'>CSV;</label><label><input type='radio' name='format' value='tsv'>TSV</label>
<tr><th>Database<td><select name='db_style'><option><option>USE<option>DROP+CREATE<option selected>CREATE</select><label><input type='checkbox' name='routines' value='1' checked>Routines</label><label><input type='checkbox' name='events' value='1' checked>Events</label><tr><th>Tables<td><select name='table_style'><option><option selected>DROP+CREATE<option>CREATE</select><label><input type='checkbox' name='auto_increment' value='1'>Auto Increment</label><label><input type='checkbox' name='triggers' value='1' checked>Triggers</label><tr><th>Data<td><select name='data_style'><option><option>TRUNCATE+INSERT<option selected>INSERT<option>INSERT+UPDATE</select></table>
<p><input type="submit" value="Export">
<input type="hidden" name="token" value="29785:858629">

<table cellspacing="0">
<script nonce="ODU4NjI0NzllM2YxMzIxYjQ5ZDQ1OTlkNzc1NzFlYjY=">qsl('table').onclick = dumpClick;</script>
<thead><tr><th style='text-align: left;'><label class='block'><input type='checkbox' id='check-databases' checked>Database</label><script nonce="ODU4NjI0NzllM2YxMzIxYjQ5ZDQ1OTlkNzc1NzFlYjY=">qs('#check-databases').onclick = partial(formCheck, /^databases\[/);</script></thead>
<tr><td><label class='block'><input type='checkbox' name='databases[]' value='mysql' checked>mysql</label>
<tr><td><label class='block'><input type='checkbox' name='databases[]' value='phpmyadmin' checked>phpmyadmin</label>
<tr><td><label class='block'><input type='checkbox' name='databases[]' value='test' checked>test</label>
<tr><td><label class='block'><input type='checkbox' name='databases[]' value='wd3' checked>wd3</label>
<tr><td><label class='block'><input type='checkbox' name='databases[]' value='wd4' checked>wd4</label>
</table>
</form>
</div>

<form action='' method='post'>
<div id='lang'>Language: <select name='lang'><option value="en" selected>English<option value="ar">العربية<option value="bg">Български<option value="bn">বাংলা<option value="bs">Bosanski<option value="ca">Català<option value="cs">Čeština<option value="da">Dansk<option value="de">Deutsch<option value="el">Ελληνικά<option value="es">Español<option value="et">Eesti<option value="fa">فارسی<option value="fi">Suomi<option value="fr">Français<option value="gl">Galego<option value="he">עברית<option value="hu">Magyar<option value="id">Bahasa Indonesia<option value="it">Italiano<option value="ja">日本語<option value="ko">한국어<option value="lt">Lietuvių<option value="ms">Bahasa Melayu<option value="nl">Nederlands<option value="no">Norsk<option value="pl">Polski<option value="pt">Português<option value="pt-br">Português (Brazil)<option value="ro">Limba Română<option value="ru">Русский<option value="sk">Slovenčina<option value="sl">Slovenski<option value="sr">Српски<option value="ta">த‌மிழ்<option value="th">ภาษาไทย<option value="tr">Türkçe<option value="uk">Українська<option value="vi">Tiếng Việt<option value="zh">简体中文<option value="zh-tw">繁體中文</select><script nonce="ODU4NjI0NzllM2YxMzIxYjQ5ZDQ1OTlkNzc1NzFlYjY=">qsl('select').onchange = function () { this.form.submit(); };</script> <input type='submit' value='Use' class='hidden'>
<input type='hidden' name='token' value='298367:647971'>
</div>
</form>
<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Logout" id="logout">
<input type="hidden" name="token" value="29785:858629">
</p>
</form>
<div id="menu">
<h1>
<a href='https://www.adminer.org/' target="_blank" rel="noreferrer noopener" id='h1'>Adminer</a> <span class="version">4.6.2</span>
<a href="https://www.adminer.org/#download" target="_blank" rel="noreferrer noopener" id="version">4.6.3</a>
</h1>
<script src='adminer-4.6.2.php?file=jush.js&amp;version=4.6.2' nonce="ODU4NjI0NzllM2YxMzIxYjQ5ZDQ1OTlkNzc1NzFlYjY="></script>
<script nonce="ODU4NjI0NzllM2YxMzIxYjQ5ZDQ1OTlkNzc1NzFlYjY=">
bodyLoad('5.5', true);
</script>
<form action="">
<p id="dbs">
<input type="hidden" name="username" value="root"><span title='database'>DB</span>: <select name='db'><option value=""><option>information_schema<option>mysql<option>performance_schema<option>phpmyadmin<option>test<option>wd3<option>wd4</select><script nonce="ODU4NjI0NzllM2YxMzIxYjQ5ZDQ1OTlkNzc1NzFlYjY=">mixin(qsl('select'), {onmousedown: dbMouseDown, onchange: dbChange});</script>
<input type='submit' value='Use' class='hidden'>
<input type="hidden" name="dump" value=""></p></form>
<p class='links'><a href='adminer-4.6.2.php?username=root&amp;sql='>SQL command</a>
<a href='adminer-4.6.2.php?username=root&amp;import='>Import</a>
<a href='adminer-4.6.2.php?username=root&amp;dump=' id='dump' class='active '>Export</a>
</div>
<script nonce="ODU4NjI0NzllM2YxMzIxYjQ5ZDQ1OTlkNzc1NzFlYjY=">setupSubmitHighlight(document);</script>
