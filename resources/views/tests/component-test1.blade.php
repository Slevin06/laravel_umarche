<x-tests.app>

    {{-- 名前付きslot例 --}}
    <x-slot name="header">
        header 1
    </x-slot>

    {{-- コンポーネントの$slotに下記が入る。--}}
    component test 1

    {{-- 属性でコンポーネントを使う --}}
    <x-tests.card title="属性でタイトル表示" content="属性でコンテンツ表示" :message=$message /> {{-- コントローラーからの変数受け渡し --}}

</x-tests.app>
