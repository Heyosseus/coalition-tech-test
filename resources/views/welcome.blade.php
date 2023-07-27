<x-layout>
    <div class="">
        <form action="{{ route('tasks.index') }}" method="post" class="mb-4">
            @csrf
            <label>
                <input type="text" name="task_name" placeholder="Task Name" class="py-2 px-4 mr-2" />
            </label>
            <button type="submit" class="py-2 px-4 bg-gray-500 text-white rounded-md">Add task</button>
        </form>
    </div>
</x-layout>
