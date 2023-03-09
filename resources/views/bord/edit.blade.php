<x-app-layout>
    <div class="container py-12">
        <div class="row col-12 post_box">
            <form action="{{ route('bord.update') }}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <input type="hidden" name="id" value="{{ $bord->id }}">
                <label for="food_name" class="col-12 col-sm-2 edit_name"><p>料理名</p></label>
                <input type="text" name="title" value="{{ $bord->title }}" class="col-9">
                <label for="content" class="col-8 col-sm-2"><p>内容</p></label>
                <input type="text" name="contents" value="{{ $bord->contents }}" class="col-9 edit_contents">
                <label for="image" class="col-8 col-sm-2"><p>画像</p></label>
                <input id="image" type="file" name="image" class="col-9 post_image">
                <input type="submit" value="更新" class="col-10 post_upload">
            </form>
        </div>
    </div>
</x-app-layout>
