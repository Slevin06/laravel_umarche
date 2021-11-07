<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            オーナー 一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{--エロクアント
                    @foreach($eloquentAll as $eloquentOwner)
                        {{ $eloquentOwner->name }}
                        {{ $eloquentOwner->created_at->diffForHumans() }}
                    @endforeach

                    <br>

                    クエリビルダ
                    @foreach($querybuilderGet as $querybuilderOwner)
                        {{ $querybuilderOwner->name }}
                        {{ Carbon\Carbon::parse($querybuilderOwner->created_at)->diffForHumans() }}
                    @endforeach--}}

                    <section class="text-gray-600 body-font">
                        <div class="container px-5 mx-auto">

                            <x-flash-message status="info"/>

                            <div
                                class="lg:w-2/3 w-full mx-auto overflow-auto clear-both mb-4">
                                <button
                                    onclick="location.href='{{ route('admin.owners.create') }}'"
                                    class="float-right text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg">
                                    新規登録する
                                </button>
                            </div>

                            <div
                                class="lg:w-2/3 w-full mx-auto overflow-auto clear-both">
                                <table
                                    class="table-auto w-full text-left whitespace-no-wrap">
                                    <thead>
                                    <tr>
                                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">
                                            name
                                        </th>
                                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                            email
                                        </th>
                                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                            created_at
                                        </th>
                                        <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($owners as $owner)
                                        <tr>
                                            <td class="px-4 py-3">{{ $owner->name }}</td>
                                            <td class="px-4 py-3">{{ $owner->email }}</td>
                                            <td class="px-4 py-3">{{ $owner->created_at }}</td>
                                            <td class="px-4 py-3">
                                                <button
                                                    onclick="location.href='{{ route('admin.owners.edit', ['owner' => $owner->id]) }}'"
                                                    class="text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg">
                                                    Update
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach

                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
