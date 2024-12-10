<form class="serviceForm serviceUpdate">
    @csrf
 
    <div>
        <label for="summary">Service summary:</label>
        <input type="text" id="summary" name="summary" value="{{  $service->summary  }}">
    </div>
    <div>
        <label for="icon">FontAwesome Icon:</label>
        <input type="text" id="icon" name="icon" placeholder="e.g., fas fa-cog" value="{{ $service->icon }}">
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description">{{  $service->description }}</textarea>
    </div>
    <div >
        <input type="hidden" name="id" value="{{  $service->id   }}">
    </div>
    <button type="submit" class="btn updateServiceButton" >
        Update Service
    </button>
   
    <button type="input" class="btn btn-danger deleteServiceButton" style="margin-top: 10px; background: #dc3545;" id-to-delete="{{ $service->id  }}">
        Delete Service
    </button>
  
</form>
