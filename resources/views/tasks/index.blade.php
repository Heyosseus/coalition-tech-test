<x-layout>
    <div class="flex items-center w-[600px] justify-between">
        <p class="text-4xl text-white">Tasks </p>
        <a href="/" class="text-white py-2  px-4 rounded-lg bg-black">Go back</a>
    </div>

    @foreach(
        $tasks as $task
    )
    <div class="bg-white rounded-lg p-3 mb-3 mt-4 flex items-center justify-between">
        <div>
            <p class="text-xl font-semibold">{{ $task->task_name }}</p>
            <p class="text-sm text-gray-500">{{ $task->created_at->diffForHumans() }}</p>
        </div>
        <div class="flex space-x-2">

            <a href="{{ route('tasks.edit', ['task' => $task->id]) }}" class="text-gray-600">Edit</a>

            <form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="text-red-600">Delete</button>
            </form>
        </div>
    </div>
 @endforeach
</x-layout>
