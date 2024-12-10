<form class="serviceForm serviceCreate">
    @csrf
 
    <div>
        <label for="summary">Service summary:</label>
        <input type="text" id="summary" name="summary" >
    </div>
    <div>
        <label for="icon">FontAwesome Icon:</label>
        <input type="text" id="icon" name="icon" placeholder="e.g., fas fa-cog">
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
    </div>
    
    <button type="submit" class="btn createServiceButton" >
        Create Service
    </button>
   
</form>

<div class="responseMessage"></div>
<style>
   
    .serviceForm {
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

    input[type="text"],
    textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #cccccc;
        border-radius: 4px;
        font-size: 14px;
        box-sizing: border-box;
    }

    textarea {
        min-height: 80px;
        resize: vertical;
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
    .btn-danger {
        background: #dc3545;
    }

    .btn:hover {
        background: #0056b3;
    }
    #responseMessage {
        margin-top: 15px;
        font-size: 14px;
        color: #333333;
        text-align: center;
    }
</style>

