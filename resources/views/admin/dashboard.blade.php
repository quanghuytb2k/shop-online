@extends('admin.layouts.app')

@section('content')
    <div id="main-content-wp" class="home-page clearfix">
        <div class="wp-inner">
            <div class="flex flex-col">
                <div class="overflow-x-auto">
                    <div class="inline-block min-w-full">
                        <div class="overflow-hidden">
                            <table
                                class="min-w-full text-left text-sm font-light text-surface dark:text-white">
                                <thead
                                    class="border-b border-neutral-200 font-medium dark:border-white/10">
                                <tr>
                                    <th scope="col" class="px-6 py-4">#</th>
                                    <th scope="col" class="px-6 py-4">First</th>
                                    <th scope="col" class="px-6 py-4">Last</th>
                                    <th scope="col" class="px-6 py-4">Handle</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="border-b border-neutral-200 dark:border-white/10">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">1</td>
                                    <td class="whitespace-nowrap px-6 py-4">Mark</td>
                                    <td class="whitespace-nowrap px-6 py-4">Otto</td>
                                    <td class="whitespace-nowrap px-6 py-4">@mdo</td>
                                </tr>
                                <tr class="border-b border-neutral-200 dark:border-white/10">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">2</td>
                                    <td class="whitespace-nowrap px-6 py-4">Jacob</td>
                                    <td class="whitespace-nowrap px-6 py-4">Thornton</td>
                                    <td class="whitespace-nowrap px-6 py-4">@fat</td>
                                </tr>
                                <tr class="border-b border-neutral-200 dark:border-white/10">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">3</td>
                                    <td class="whitespace-nowrap px-6 py-4">Larry</td>
                                    <td class="whitespace-nowrap px-6 py-4">Wild</td>
                                    <td class="whitespace-nowrap px-6 py-4">@twitter</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

