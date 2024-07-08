<div class="flex flex-col gap-2">
    <label for="">عنوان </label>
    <input dir="<?= $lang === 'fa' ? 'rtl' : 'ltr' ?>" require id="title" name="title"
        value="<?= $edit ? $news['title'] : '' ?>" type="text"
        class="p-2 rounded-[10px] bg-gray-100   outline-[#0284c7] " placeholder="عنوان">
    <input hidden id="lang" name="lang" type="text" value="<?= $lang ?>">
    @if ($edit)
        <input id="id" value="{{ $news['id'] }}" name="id" type="text" hidden>
    @endif
</div>
<div class="flex flex-col gap-2">
    <label for=""> اسلاگ </label>
    <input dir="ltr" require id="slug" name="slug" value="{{ $edit ? $news['slug'] : '' }}" type="text"
        class="p-2 rounded-[10px] bg-gray-100   outline-[#0284c7] " placeholder="slug">

</div>

<div class="flex flex-col gap-2">
    <label for=""> دسته بندی </label>
    <select require id="category" name="category" type="text"
        class="p-2 rounded-[10px] bg-gray-100   outline-[#0284c7] ">

        @foreach ($categories as $category)
            @if ($edit)
                <option <?= $category['id'] === $news['category'] ? 'selected' : '' ?> value="<?= $category['id'] ?>">
                    <?= $category['title'] ?></option>
            @else
                <option value="{{ $category['id'] }}">{{ $category['title'] }}</option>
            @endforeach

    </select>

</div>

<div class="flex flex-col gap-2">
    <label for=""> متن </label>
    <textarea require id="content" type="text"
        class="p-2 rounded-[10px] bg-gray-100   outline-[#0284c7] <?= $lang == 'fa' ? 'ckEditorF' : 'ckEditor' ?> ">
            @if ($edit)
                {{ $news['content'] }}
            @endif
</textarea>

</div>



@if ($edit)
    <div class="flex flex-col gap-2">
        <label for=""> تصویر </label>
        <input id="img" name="img" type="file" accept="image/*"
            class="p-2 rounded-[10px] bg-gray-100   outline-[#0284c7] ">
        @if ($news['image'])
            <img class="object-cover h-full w-[250px] rounded-md rounded-md "
                src="{{ url() . 'news/img/' . $news['id'] }}" alt="{{ $news['title'] }}">
        @endif
    </div>
@else
    <div class="flex flex-col gap-2">
        <label for=""> تصویر </label>
        <input id="img" name="img" type="file" accept="image/*"
            class="p-2 rounded-[10px] bg-gray-100   outline-[#0284c7] ">
    </div>

@endif
