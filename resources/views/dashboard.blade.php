<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <a href="{{ route( 'bord.create' ) }}">投稿</a>
            </div>
        </div>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">番号</th>
            <th scope="col">タイトル</th>
            <th scope="col">内容</th>
            <th scope="col">投稿日</th>
            <th scope="col">更新日</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
            @foreach ($bords as $bord)
            <tr>
                <td><a href="/edit/{{$bord->id}}">{{ $bord->id }}</a></td>
                <td>{{ $bord->title }}</td>
                <td>{{ $bord->contents }}</td>
                <td>{{ $bord->created_at }}</td>
                <td>{{ $bord->updated_at }}</td>
                <td><a href="/delete/{{$bord->id}}">x</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>
