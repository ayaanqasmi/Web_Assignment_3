<form id="tutorialForm">
    @csrf
    <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
    </div>
    <div class="form-group">
        <label for="url">Video embed link:</label>
        <input type="text" id="url" name="url" required placeholder="Paste embed link here">
    </div>
    <button type="submit" class="btn">Create Tutorial</button>
</form>
<div id="tutorialResponseMessage"></div>

<script>
    document.getElementById('tutorialForm').addEventListener('submit', async function (event) {
        event.preventDefault(); 

        const form = event.target;
        const formData = new FormData(form);
        

        try {
            const response = await fetch('/api/tutorials', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                    'Accept': 'application/json',
                },
                body: formData,
            });

            const result = await response.json();

            if (response.ok) {
                document.getElementById('tutorialResponseMessage').innerText = 'Tutorial created successfully!';
                form.reset(); 
                window.location.reload();
            } else {
                document.getElementById('tutorialResponseMessage').innerText = `Error: ${result.message}`;
            }
        } catch (error) {
            document.getElementById('tutorialResponseMessage').innerText = `Error: ${error.message}`;
        }
    });
</script>

<style>
 

    #tutorialForm {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background: #ffffff;
        border: 1px solid #dddddd;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #cccccc;
        border-radius: 4px;
        font-size: 14px;
        box-sizing: border-box;
    }

    .btn {
        display: inline-block;
        width: 100%;
        padding: 10px;
        background: #007bff;
        color: #ffffff;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        text-align: center;
    }

    .btn:hover {
        background: #0056b3;
    }

    #tutorialResponseMessage {
        margin-top: 15px;
        font-size: 14px;
        color: #333333;
        text-align: center;
    }
</style>
