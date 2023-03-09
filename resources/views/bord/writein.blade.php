<x-app-layout>
    <div class="container py-12">
        <div class="row writein_box">
            <form action="{{ route('bord.comment_ins') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $bord->id }}">
                <label for="content" class="col-7"><p>コメント</p></label>
                <input id="content" type="text" name="comment" class="col-9 col-sm-6 writein_content">
                <input type="submit" value="コメントを送信" class="col-7 writein_upload">
            </form>
        </div>
    </div>
</x-app-layout>
