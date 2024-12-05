<!-- resources/views/create_service.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Service</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <h1>Create Service</h1>
    <form action="api/services" method="POST">
        @csrf
        <div>
            <label for="summary">Service summary:</label>
            <input type="text" id="summary" name="summary" required>
        </div>
        <div>
            <label for="icon">FontAwesome Icon:</label>
            <input type="text" id="icon" name="icon" required placeholder="e.g., fas fa-cog">
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>
        </div>
        <button type="submit">Create Service</button>
    </form>
</body>
</html>