@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold sm:bg-green-800 text-yellow-400 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Dashboard
            </header>

        </section>

        <section style="margin-top: 20px;">

            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="table-fixed min-w-full divide-y divide-gray-200">
                        <thead>
                        <tr>
                            <th scope="col" class=" w-1/1 px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Title
                            </th>
                            <th scope="col" class="w-1/5 px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Event date
                            </th>
                            <th scope="col" class="w-1/7 px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Hour
                            </th>
                            <th scope="col" class="px-6 py-3 bg-gray-50">
                            <span class="sr-only">Unsubscribe</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        
                        @foreach ($events as $event)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                    {{$event->title}}
                                </div>
                                <div class="text-sm text-gray-500">
                                    {{$event->short_description}}
                                </div>
                                </div>
                            </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{$event->event_date->format('d-m-Y')}}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{$event->hour}}</div>
                                </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <form action="{{route('unsubscribe', ['id' => $event->id])}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <input type="submit" value="Unsubscribe" class="text-indigo-600 hover:text-indigo-900">
                                </form>

                            {{-- <a href="{{route('unsubscribe', ['id' => $event->id])}}" class="text-indigo-600 hover:text-indigo-900">Unsubscribe</a> --}}
                            </td>
                        </tr>
                        @endforeach
                        <!-- More rows... -->
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>

        </section>
    </div>
</main>
@endsection
