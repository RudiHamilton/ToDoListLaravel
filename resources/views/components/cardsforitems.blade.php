</br>
</br>
<table>
    <thead>
        <tr>
            <th>Task Name</th>
            <th>Description</th>
            <th>Due Date</th>
            <th>Urgency</th>
        </tr>
    </thead>
    <tbody class="text-green-600">
        @forelse ($tasks as $task)
            <tr>
                <td>{{ $task->task_name }}</td>
                <td>{{ $task->task_description }}</td>
                <td>{{ $task->task_date_due }}</td>
                <td>{{ $task->task_urgency }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5">No tasks found.</td>
            </tr>
        @endforelse
    </tbody>
</table>