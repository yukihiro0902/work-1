<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('bord.insert') }}" method="post">
                    @csrf
                    <label for="">title</label>
                    <input type="text" name="title" value="">
                    <label for="">contents</label>
                    <input type="text" name="contents" value="">
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
