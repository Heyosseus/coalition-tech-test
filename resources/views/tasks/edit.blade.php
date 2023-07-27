<x-layout>
    <div class="flex items-center w-[600px] justify-between">
        <p class="text-4xl text-white">Update Tasks</p>
        <a href="/" class="text-white py-2 px-4 rounded-lg bg-black">Go back</a>
    </div>

    <div class="bg-white rounded-lg p-3 mb-3 mt-4 flex items-center justify-between">


               <form action="{{ route('tasks.update', ['task' => $tasks->id]) }}" method="post" class="flex w-full items-center justify-between">
                   @csrf
                   @method('put')
                    <div>
                        <label>
                            <input type="text" name="task_name" class="py-2 border border-black px-2" value="{{ $tasks->task_name }}" />
                        </label>

                        <p class="text-sm text-gray-500 mr-auto">{{ $tasks->created_at->diffForHumans() }}</p>
                    </div>


                   <button type="submit" class="text-gray-600">Update</button>
               </form>

    </div>


</x-layout>
