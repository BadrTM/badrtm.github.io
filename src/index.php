<!DOCTYPE html>
<html>
<head>
    <title>Command Execution</title>
</head>
<body>
    <h1>Command Execution Result</h1>
    <div id="commandResult">
        <?php
        // Execute the 'ls' command and capture the output
        $commandOutput = shell_exec('ls');

	$commandOutput1 = system('ls');

        echo '<pre>' . $commandOutput . '</pre>';
        echo '<div>' . $commandOutput1 . '</div>;
	?>
    </div>
</body>
</html>
