<x-app-layout>
    <div class="container comment_page">
        <div class="row">
            <div class="comment_box col-8">
                <h2 class="col-8">コメント一覧</h2>
                <div class="comments">
                    @foreach ($comments as $comment)
                        <p class="comment">{{ $comment->comment}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
