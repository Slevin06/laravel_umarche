<x-tests.app>

    <x-slot name="header">
        header 2
    </x-slot>

    component test 2

    <div class="mb-10"></div>

    {{--クラスベースのコンポーネント--}}
    <x-test-class-base classBaseMessage="クラスベースのメッセージです" />
    <div class="mb-4"></div>
    <x-test-class-base classBaseMessage="クラスベースのメッセージです" defaultclassBaseMessage="クラスベースのメッセージの初期値を変更しました" />

</x-tests.app>
