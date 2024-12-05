<form action="/api/tutorials" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="url" name="url" required>
        </div>
        <div>
            <label for="url">Video embed link:</label>
            <input type="text" id="icon" name="icon" required >
        </div>
       
        <button type="submit">Create Tutorial</button>
</form>