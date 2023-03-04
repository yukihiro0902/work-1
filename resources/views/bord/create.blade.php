<x-app-layout>
    <div class="container py-12">
        <div class="row col-8 post_box">
            <form action="{{ route('bord.insert') }}" method="post">
                @csrf
                <label for="" class="col-12 col-sm-2"><p>料理名</p></label>
                <input type="text" name="title" value="" class="col-9 post_name">
                <label for="" class="col-8 col-sm-2"><p>内容</p></label>
                <input type="text" name="contents" value="" class="col-9 post_content">
                <label for="" class="col-8 col-sm-2"><p>画像</p></label>
                <input type="file" name="image" value="" class="col-9 .post_image">
                <input type="submit" value="アップロード" class="col-10 post_upload">
            </form>
        </div>
    </div>


</x-app-layout>
