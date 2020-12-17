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
                Admin Dashboard
            </header>

        </section>

        <section style="margin-top: 20px;">

            <div class="flex flex-col">
            <span id="btnCreateEvent"><a href="{{route('createEvent')}}"><i class="fas fa-plus-square"></i> Create Event</a></span>
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="table-fixed min-w-full divide-y divide-gray-200">
                        <thead>
                        <tr>
                            <th scope="col" class=" w-5/6 px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Event Title
                            </th>
                            <th scope="col" class="w-2/6 px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Event date
                            </th>
                            <th scope="col" class="w-2/6 px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Event Capacity
                            </th>
                            <th scope="col" class="w-2/6 px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Subscribers
                            </th>
                            <th scope="col" class="w-2/6 px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Options
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        
                        @foreach ($events as $event)
                        <tr>
                            <td class="px-3 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                    {{$event->title}}
                                </div>
                            </div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-center text-gray-900">{{$event->event_date->format('d-m-Y H:00')}}</div>
                            </td>

                            <td class="px-3 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">
                                <div class="ml-4">
                                <div class="text-sm text-center font-medium text-gray-900">
                                    {{$event->event_capacity}}
                                </div>
                            </div>
                            </td>

                            <td class="px-3 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">
                                <div class="ml-4">
                                <div class="text-sm text-center font-medium text-gray-900">
                                <!-- FALTA VINCULAR A TABLA PIVOTE... -->
                                    {{$event->subscribers}}
                                </div>
                            </div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">

                            <form action="{{route('editEvent', $event->id)}}" method="get">
                                @csrf
                                <button type="submit" class="fas fa-edit text-indigo-600 hover:text-indigo-900"></button>
                            </form>

                            <form action="{{route('destroyEvent', $event->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="fas fa-trash-alt text-indigo-600 hover:text-indigo-900"></button>
                            </form>
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
