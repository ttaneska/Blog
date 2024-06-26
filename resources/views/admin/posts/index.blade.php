<x-layout>
    <x-setting heading="Manage Posts">

        <table class="min-w-full divide-y divide-gray-200 overflow-x-auto">

            <tbody class="bg-white divide-y divide-gray-200">
            @foreach($posts as $post)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">

                            <div class="text-sm font-medium text-gray-900">
                                <a href="/posts/{{$post->slug}}">
                                {{$post->title}}
                                </a>
                            </div>
                        </div>
                    </td>


                    <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                        <a href="/admin/posts{{$post->id}}/edit" class="text-blue-500 hover:text-blue-600">Edit</a>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
{{--                        <a href="/admin/posts{{$post->id}}/edit" class="text-blue-500 hover:text-blue-600">Delete</a>--}}
                        <form method="POST" action="/admin/posts/{{$post->id}}">
                            @csrf
                            @method('DELETE')
                            <button class="text-xs text-gray-400">Delete</button>


                        </form>
                    </td>

                </tr>

            @endforeach

            </tbody>
        </table>

    </x-setting>
</x-layout>
