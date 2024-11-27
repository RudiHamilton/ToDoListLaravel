@vite("/resources/css/app.css")
@vite("/resources/css/taskstyling.css")

<div id="popupOverlay" 
class="overlay-container">
<div class="popup-box">
   <h2 style="color: green;">Add Task</h2>
   <form class="form-container">
       <label class="form-label" 
              for="taskname">
         Task Name:
         </label>
       <input class="form-input" type="text" 
              placeholder="Enter Task Name" 
              id="taskname" name="taskname" required>

       <label class="form-label" for="taskdescription">
        Task Description:
       </label>
       <input class="form-input"
              type="taskdescription" 
              placeholder="Enter Task Description"
              id="taskdescription" 
              name="taskdescription" required>
        <label class="form-label" for="radiobuttonsurgency">
            Urgency of task:
        </label>
        <select class="form-input"
                id="selecttaskurgency"
                name="selecttaskurgency" required>
                    <option value="High">High</option>
                    <option value="Moderate">Moderate</option> 
                    <option value="Low">Low</option>
        </select>
        <label class="form-label" for="taskduedate">
            Task Due Date:
        </label>
        <x-flatpickr::style />
        <x-flatpickr::script
            url="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.js"
        />
        <x-flatpickr id="date-picker" date-format="d/m/Y" />
        <button class="btn-submit" 
               type="submit">
         Submit
        </button>
   </form>

   <button class="btn-close-popup" 
           onclick="togglePopup()">
     Close
     </button>
</div>
</div>
<script>
    function togglePopup() {
        const overlay = document.getElementById('popupOverlay');
        overlay.classList.toggle('show');
    }

</script>