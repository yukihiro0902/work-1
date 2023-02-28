<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <p>test</p>
            </div>
        </div>
    </div>

    <div class="container">
        <table class="list_table">
            @foreach ($bords as $bord)
            <tr>
                <td>{{ $bord->id }}</td>
                <td>{{ $bord->title }}</td>
                <td>{{ $bord->contents }}</td>
                <td>{{ $bord->created_at }}</td>
                <td>{{ $bord->updated_at }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</x-guest-layout>
