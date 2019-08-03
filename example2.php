<html>
<head>
    <title>Personalized Greeting Form</title>
</head>
<body>
<?php if (!empty($_POST['name'])) {
    echo "Greeting, {$_POST['name']}, and welcome.";
} ?>
<form action=""<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Enter your name: <input type="text" name="name" />
<input type="submit" />
</form>
</body>
</html>
