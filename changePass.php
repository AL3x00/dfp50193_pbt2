<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>

<body>
    <form action="changePass_process.php" method="post">
        <table border="0">
            <tr>
                <td>Current Password: </td>
                <td><input type="password" name="currentpass"></td>
            </tr>
            <tr>
                <td>New Password: </td>
                <td><input type="password" name="newpass"></td>
            </tr>
            <tr>
                <td>Confirm New Password: </td>
                <td><input type="password" name="confirmpass"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit">Edit</button></td>
            </tr>
        </table>
    </form>
</body>

</html>