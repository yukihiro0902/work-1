<x-app-layout>
    <div class="container py-12">
        <div class="row coment_box">
            <form action="/comment" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $bord->id }}">
                <label for="content" class="col-7"><p>コメント</p></label>
                <input id="content" type="text" name="comment" value="" class="col-9 col-sm-6 coment_content">
                <input type="submit" value="コメントを送信" class="col-7 coment_upload">
            </form>
        </div>
    </div>
</x-app-layout>
