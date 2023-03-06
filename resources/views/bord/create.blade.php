<x-app-layout>
    <div class="container py-12">
        <div class="row col-12 post_box">
            <form action="{{ route('bord.insert') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="food_name" class="col-12 col-sm-2"><p>料理名</p></label>
                <input id="food_name" type="text" name="title" class="col-9 post_name">
                <label for="content" class="col-8 col-sm-2"><p>内容</p></label>
                <input id="content" type="text" name="contents" class="col-9 post_content">
                <label for="image" class="col-8 col-sm-2"><p>画像</p></label>
                <input id="image" type="file" name="image" class="col-9 .post_image">
                <input type="submit" value="アップロード" class="col-10 post_upload">
            </form>
        </div>
    </div>
</x-app-layout>
