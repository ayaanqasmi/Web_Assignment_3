<div class="list">
    <h2>Add a New Testimonial</h2>
    <form id="add-testimonial-form" method="POST" action="">
        @csrf
        
        <label for="image-url">Image URL:</label>
        <input
            type="url"
            id="image-url"
            name="url"
            required
            placeholder="Enter the image URL" />

        <label for="quote">Testimonial Quote:</label>
        <textarea
            id="quote"
            name="description"
            required
            placeholder="Enter the testimonial quote"></textarea>

        <label for="name">Name:</label>
        <input
            type="text"
            id="name"
            name="name"
            required
            placeholder="Enter the person's name" />

        <button type="submit">Add Testimonial</button>
    </form>
</div>

