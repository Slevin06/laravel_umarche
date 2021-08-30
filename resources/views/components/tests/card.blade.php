<div class="border-2 shadow-md w-1/4 p-2 mb-10">

    {{-- 属性のコンポーネント --}}
    <div>{{ $title }}</div>
    <div>画像</div>
    <div>{{ $content }}</div>

</div>

<div class="border-4 shadow-inner w-1/2 p-2">
    {{-- コントローラーからの変数受け渡しコンポーネント --}}
    <div>{{ $message }}</div>
</div>
