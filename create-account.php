<!DOCTYPE html>
<html>
    <head>
        <title>CREATE ACCOUNT</title>
    </head>
    <body>
        <pre>
            <form method="post" action="add-account.php">
                <div>
                    USERNAME
                    <input type="text" name="username" required>
                </div>
                <div>
                    PASSWORD
                    <input type="password" name="password" required>
                </div>
                <div>
                    CONFIRM PASSWORD
                    <input type="password" required>
                </div>
                <div>
                    EMAIL
                    <input type="text" name="email" required>
                </div>
                <div>
                    <input type="submit" value="Submit">
                </div>
            </form>
            <div>
                ALREADY HAVE AN ACCOUNT?
                <a href="index.php">BACK TO LOGIN</a>
            </div>
        </pre>
    </body>
    
</html>
