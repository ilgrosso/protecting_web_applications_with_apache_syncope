<html>
<body>
<p>Welcome to protected area.</p>

<p>You can <a href="logout.php">logout</a>.</p>

<pre>
<?
$token=$_SERVER['HTTP_JWT'];
print_r(json_decode(base64_decode(str_replace('_', '/', str_replace('-','+',explode('.', $token)[1])))));
?>
</pre>
</body>
</html>
