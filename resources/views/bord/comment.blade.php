<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-8 comment_box">
                <h2 class="col-8">コメント一覧</h2>
                @foreach ($comments as $comment)
                    <p>{{ $comment->comment}}</p>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
