<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-9" />
<title>Php Güvenlik Kodu Doğrulaması</title>
<meta http-equiv="pragma" content="no-cache" />
<meta name="copyright" content="Php Güvenlik Doğrulaması" />
<meta name="description" content="Php ile güvenlik doğrulaması uygulaması" />
<meta name="KEYWORDS" content="Php Güvenlik Kodu - Php Resim Doğrulama" />
<meta name="AUTHOR" content="İlham DENERİ" />
<script src="http://code.jquery.com/jquery-latest.min.js"></script>

<script language="javascript">
	function ChangeCode(){
		var NewSecurity= "<img src='security.php?rnd="+Math.random()+"' alt='guvenlik' style='border: 1px solid #999999;' />";
		$("#security").html(NewSecurity);
		return false;
	}
</script>
	
<style type="text/css">
img{
	border:none;
}

input{
	border: 1px solid #DBDBDB;
    font-family: Verdana,Arial,Helvetica,sans-serif;
    margin: 10px 10px 8px 0;
    width: 98px;
}
</style>

</head>

<form action="kontrol.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0">
		<tr>
		<th style="color: #b62463; padding-bottom: 20px; text-align:left;" colspan="4">&nbsp;</th>
	</tr>
	<tr>
		<th>&nbsp;</th>
		<th></th>
		<td>
		<div id="security"></div>
		</td>
		<td><a href="javascript:;" onclick="ChangeCode();"><img	src="refresh.png" /></a></td>
	</tr>
	<tr>
		<th></th>
		<th></th>
		<td><input type="text" name="security"/></td>
		<td>&nbsp;</td>
	</tr>
	</table>
</form>
</html>