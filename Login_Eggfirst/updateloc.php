<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Location</title>
</head>
<body>
    <h1>Update Location</h1>

    <form action="updateloc_action.php" method="post">
        <label for="new_location">New Location:</label>
        <input type="text" id="new_location" name="new_location" required>
        <button type="submit">Update</button>
    </form>
    <!-- Button to go back to index.php -->
    <button onclick="window.location.href='index.php'">Back to Home</button>
</body>
</html>
