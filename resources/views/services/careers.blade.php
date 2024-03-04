<x-layout>
    <x-header>
    </x-header>
    @include('components.success-message')
    <div class="p-6 lg:p-20">
        <h1 class="text-4xl text-pink-950 font-bold">Careers</h1>
        <div class="w-20 h-0.5 bg-black mt-4"></div>


        <div class="overflow-x-auto">
            @if($vacancies->isEmpty())
                <div class="p-10 mt-10 bg-gray-900">
                    <p class="text-white font-bold text-2xl text-center">No open vacancies right now</p>
                </div>
            @else
                <table class="table-auto w-full border-collapse border border-gray-300 mt-6 cursor-pointer">
                    <thead>
                    <tr>
                        <th class="text-left bg-gray-100 border-b border-gray-300 px-4 py-2">Position</th>
                        <th class="text-left bg-gray-100 border-b border-gray-300 px-4 py-2">Description</th>
                        <th class="text-left bg-gray-100 border-b border-gray-300 px-4 py-2">Location</th>
                        <th class="text-left bg-gray-100 border-b border-gray-300 px-4 py-2">Created at</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($vacancies as $vacancy)

                        <tr class="bg-white border-b border-gray-300"
                            data-description="{{$vacancy->description}}"
                            onclick="document.getElementById('modal').click()">
                            <td class="text-left px-4 py-2">{{$vacancy->title}}</td>
                            <td class="text-left px-4 py-2 max-w-xs md:max-w-none">
                                {{$vacancy->description}}
                            </td>
                            <td class="text-left px-4 py-2">{{$vacancy->location ?? 'Georgia'}}</td>
                            <td class="text-left px-4 py-2">{{substr($vacancy->created_at, 0, 10)}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            @endif
        </div>

        <div class="flex flex-col lg:flex-row lg:justify-between lg:items-center w-full space-x-5 mt-20">
            <div class="lg:w-1/3">
                <h1 class="uppercase tracking-wide text-3xl mt-10 text-center lg:text-start lg:mt-0">contact us</h1>
                <p class="mt-10 text-center lg:text-start">If you are interested in working with us, please send us your
                    <span class="font-bold">CV</span></p>
            </div>
            <form  action="{{route('vacancy-response.store')}}" class="lg:w-1/2 bg-gray-50 shadow px-10 pb-10"
                  method="post" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4 mt-10">
                    <div class="flex flex-col w-full lg:w-1/2">
                        <label for="name" class="text-sm text-pink-950 font-bold mb-1">Name <span
                                class="text-red-700">*</span></label>
                        <input type="text" name="name" id="name" class="border border-gray-300 p-3 rounded-md"
                               placeholder="Enter your name">
                    </div>
                    <div class="flex flex-col w-full lg:w-1/2">
                        <label for="email" class="text-sm text-pink-950 font-bold mb-1">Email <span
                                class="text-red-700">*</span></label>
                        <input type="email" name="email" id="email" class="border border-gray-300 p-3 rounded-md"
                               placeholder="Enter your email">
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4 mt-10">
                    <div class="flex flex-col w-full lg:w-1/2">
                        <label for="position" class="text-sm text-pink-950 font-bold mb-1">Position <span
                                class="text-red-700">*</span></label>
                        <input type="text" name="position" id="position" class="border border-gray-300 p-3 rounded-md"
                               placeholder="Enter your position">
                    </div>
                    <div class="flex flex-col w-full lg:w-1/2">
                        <label for="CV" class="text-sm text-pink-950 font-bold mb-1">Upload CV <span
                                class="text-red-700">*</span></label>
                        <input type="file" name="CV" id="CV" class="border border-gray-300 p-3 rounded-md">
                    </div>

                </div>

                <button
                    class="group flex items-center space-x-2 rounded-full px-5 py-2 border border-pink-950 text-pink-950 hover:bg-pink-950 hover:text-white mt-10">
                    <span>Send</span>
                </button>

            </form>
        </div>

    </div>

    <x-footer></x-footer>
</x-layout>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var rows = document.querySelectorAll('.vacancy-row');
        var modalDescription = document.getElementById('modalDescription');
        rows.forEach(function(row) {
            row.addEventListener('click', function() {
                var description = this.getAttribute('data-description');
                modalDescription.textContent = description;
                document.getElementById('modal').click();
            });
        });
    });
</script>
