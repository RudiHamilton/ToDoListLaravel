@vite("/resources/css/app.css")
@vite("/resources/css/taskstyling.css")

<div id="popupOverlay" 
class="overlay-container">
<div class="popup-box">
    <h2 style="color: green;">Add Task</h2>
    <form class="form-container" method="POST" action="/usedpages/todolist">
        @csrf
        <label class="form-label" for="taskname">Task Name:</label>
        <input class="form-input" type="text" id="taskname" name="taskname" placeholder="Enter Task Name" required />

        <label class="form-label" for="taskdescription">Task Description:</label>
        <textarea class="form-input" id="taskdescription" name="taskdescription" placeholder="Enter Task Description" required></textarea>

        <label class="form-label" for="selecttaskurgency">Urgency of Task:</label>
        <select class="form-input" id="selecttaskurgency" name="selecttaskurgency" required>
            <option value="High">High</option>
            <option value="Moderate">Moderate</option>
            <option value="Low">Low</option>
        </select>

        <label class="form-label" for="date-picker">Task Due Date:</label>
        <input class="form-input" type="text" id="date-picker" name="date-picker" placeholder="DD/MM/YYYY" required />

        <button class="btn-submit" type="submit">Submit</button>
    </form>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.js"></script>



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
    flatpickr("#date-picker", { dateFormat: "d/m/Y" });
</script>