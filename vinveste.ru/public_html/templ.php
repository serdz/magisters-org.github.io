<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/ico" />
	<title>� �������</title>
	<meta name='robots' content='noindex,nofollow' />
<script type='text/javascript' src="/js/jquery.js-ver=1.8.3.js"></script>

<script type="text/javascript" src="/js/sitepress.js"></script>
<meta name="description" content="������ ����, ������� ���� �� ���, ������ 3 ���� ��� ����� ! ��������������� ������ ����" />

	<link href="/style.css" rel="stylesheet" type="text/css" />
		<style>
		@import url(/style_ie.css)/*tpa=http://monica24.com//style_ie.css*/;
	</style>
		<script src="/js/jquery.js" type="text/javascript" ></script>
	<script src="/js/jquery.ui-slider.js" type="text/javascript"></script>
	<script src="/js/main.js" type="text/javascript"></script>
	<link href="/files/styles.css" type="text/css" rel="stylesheet" />
<script language="javascript" src="/files/scripts.js"></script>
</head>
<body >
	



	
	<div id="header">
		<div class="center">
		<?include("includes/menu_top.php");?>	
		<a href="/" class="logo"></a>			
			<div class="oblako"><div></div></div>
		</div>
		<div class="bottom"></div>
		</div>	
		<div id="reg">
		<div class="center">
		<?PHP
		if($login){?>
		<a href="/deposits" class="reg_button">� �������</a>
		
		<?}else{?>
							<a href="/registration" class="reg_button">�����������</a>
				<form method="post" action="/login/">
					
					
					<div>�����:</div>
					<input type="text" name="user" id="login"><br>
					<div>������:</div>
					<input type="password" name="pass"><br>
					
					
					<input type="submit" class="submit" value="�����">
					
					
					<br>
					<a href="/reminder">������ ������?</a>
				</form>
				<?}?>
				
						<div class="monika_big"></div>
			<div class="monika_pomoget"></div>
		</div>
		<div class="bottom"></div>
	</div>
	
	<div id="calc">
		<div class="center">
			<div class="left">
				<div class="vlogi">�����:</div>
				<div class="summa">0 ������</div>
				<div class="cl"></div>
				<div id="slider"></div>
				<div class="shcala">
					<div class="min">100 ������</div>
					<div class="max">10000 ������</div>
					<div class="cl"></div>
				</div>
				<div class="viplati">������� ������ ����!</div>
			</div>
			<div class="right">
				<div class="poluchi">������:</div>
				<div class="time">
					<div class="t24">110 ������</div>
					<span>����� 1 ����!</span>
				</div>
				<div class="time">
					<div class="t48">220 ������</div>
					<span>����� 2 ���!</span>
				</div>
				<div class="time">
					<div class="t72">330 ������</div>
					<span>����� 3 ���!</span>
				</div>
				<div class="cl"></div>
				<div class="text">
					<br>��� ������ �������������� �����������!  ������ �� ������ ������� �����!					
				</div>
			</div>
			<div class="cl"></div>
			<div class="devaha"></div>
		</div>
	</div>
	
	<div id="stat">
		<div class="center">
			<div class="block1">
				<a href="#" class="stat_title active">����������</a>
				<?php
$cusers		= mysql_num_rows(mysql_query("SELECT id FROM users")) + cfgSET('fakeusers');
$cwm		= mysql_num_rows(mysql_query("SELECT id FROM users WHERE pm_balance != 0 OR lr_balance != 0")) + cfgSET('fakeactiveusers');

$money	= cfgSET('fakewithdraws');
$query	= "SELECT sum FROM output WHERE status = 2";
$result	= mysql_query($query);
while($row = mysql_fetch_array($result)) {
	$money = $money + $row['sum'];
}

$depmoney	= cfgSET('fakedeposits');
$query	= "SELECT sum FROM deposits WHERE status = 0";
$result	= mysql_query($query);
while($row = mysql_fetch_array($result)) {
	$depmoney = $depmoney + $row['sum'];
}
?>
				<div class="cl"></div>
				<div class="block_stat" style="display:block;">
					<table>
						<tr>
							<td>
								�������� c							</td>
							<td>
								<u><?php print date("d.m.Y", cfgSET('datestart')); ?></u> 							</td>
						</tr>
						<tr>
							<td>
								����� ����������:							</td>
							<td>
								<?php print $cusers; ?>						</td>
						</tr>
						<tr>
							<td>
								�������������:							</td>
							<td>
								<?php print $depmoney; ?> ���.
							</td>
						</tr>
						<tr>
							<td>
								���������:							</td>
							<td>
								<?php print $money; ?> ���.
							</td>
						</tr>
						
						
						<tr>
							<td>
								����� ������������:
<b><?php
	$nu	= mysql_fetch_array(mysql_query("SELECT login FROM users ORDER BY id DESC LIMIT 1"));
?>	</b>							</td>
							<td>
								<?php print $nu['login']; ?>
							</td>
						</tr>
						
						
					</table>
				</div>
				
				
			</div>
			
			<div class="block2">
				<div class="title">�������</div>
				<table>
					<thead>
						<tr>
							<th>
								���							</th>
							<th>
								�����							</th>
							<th>
								����							</th>
						</tr>
					</thead>
					
					
					<tbody>
					<?php

	$sql	= 'SELECT * FROM output ORDER BY id DESC LIMIT 5';
	$rs		= mysql_query($sql);
	if(mysql_num_rows($rs)) {

		$i = 1;
		$m = 0;
		while($a = mysql_fetch_array($rs)) {
			$money = $a['sum'];
			print "<tr class=\"grey\">
							<td>
								".$a['login']."						</td>
							<td>
								".sprintf("%01.2f", $money)."
							</td>
							<td>
								".date("d.m.Y", $topics['date'])."						</td>
						</tr>";
			$m = $m + $money;
			$i++;
		}

	} else {
		print "<tr bgcolor=\"#ffffff\"><td colspan=\"3\" align=\"center\">You have not invited anyone!</td></tr>";
	}
print "</table>";


?>
												
											</tbody>
				</table>
			</div>
			
			<div class="block3">
			
			
			
			<!--������ ���������� ����� ���-->
				<div class="title">������ � ���</div>
								<div class="text">
					
					
					
					<?php
	$query	= "SELECT * FROM answers ORDER BY id DESC LIMIT 1";
	$result	= mysql_query($query);
	$themes = mysql_num_rows($result);
while($row = mysql_fetch_array($result))
{
	print "<span class=\"content\"><p><p>".$row['text']."</p>
</span>

<div class=\"nik\">".$row['username']."</div>
				</p>
				<div class=\"cl\"></div>";
				}
				?>
						

					
					
				
					
				</div>
			
								<a href="/answers/" class="otzivv">�������� �����</a>
				<div class="cl"></div>
			</div>
			<div class="cl"></div>
		</div>
		<hr>
	</div>
	<div id="metodi">
		<div class="center">
			
		
					</div>
			<div class="cl"></div>
		</div>
	</div>
	<div id="footer">
		<div class="top"></div>
		<div class="center">
			<div class="devaha"></div>
			
			<?include("includes/menu_botom.php");?>	

			<a href="" class="skype"></a><div class="admin"> 
<a href="/about/">� �������</a>
 <a href="/news/">�������</a>

| <a href="/law/">�������</a>

 | <a href="/faq/">FAQ</a>
 | <a href="/contacts/">��������</a>





</div>                                                                                                                                                                                                            
			<div class="copy"> </div>
			<a href="/" class="logo"></a>
			<div class="cl"></div>
		</div>
	</div>
	<script type='text/javascript' src="/includes/js/jquery.form.min.js-COLLCC=1180419116&ver=3.36.0-2013.06.16.js"></script>

<script type='text/javascript' src="/includes/js/scripts.js-ver=3.4.2.js" ></script>                                                      
	
	<script type="text/javascript" src="../consultsystems.ru/script/7925/index.htm.js" charset="utf-8"></script>
</body>
</html>