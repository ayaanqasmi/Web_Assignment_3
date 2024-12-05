<form action="/api/services" method="POST">
        @csrf
        <div>
            <label for="summary">Service summary:</label>
            <input type="text" id="aummary" name="summary" required>
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