<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</br>
</br>
<table>
    <thead>
        <tr>
            <th>Task Name</th>
            <th>Description</th>
            <th>Due Date</th>
            <th>Urgency</th>
            <th class="hiddenheader"></th>
        </tr>
    </thead>
    <tbody class="text-green-600">
        @forelse ($tasks as $task)
        <tr>
            <td>{{ $task->task_name }}</td>
            <td>{{ $task->task_description }}</td>
            <td>{{ $task->task_date_due }}</td>
            <td>{{ $task->task_urgency }}</td>
            <td class="hiddencol">
                <form action="{{ route('usedpages.todolist.destroy', $task->task_id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this task?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="5">No tasks found.</td>
        </tr>
    @endforelse
    </tbody>
</table>