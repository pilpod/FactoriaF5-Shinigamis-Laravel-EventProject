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
                <span id="btnCreateEvent"><a href=""><i class="fas fa-plus-square"></i> Create Event</a></span>
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        
                        <div class="mt-10 sm:mt-0">
                              <div class="mt-5 md:mt-0 md:col-span-2">
                                <form action="#" method="POST">
                                  <div class="shadow overflow-hidden sm:rounded-md">
                                    <div class="px-4 py-5 bg-white sm:p-6">
                                      <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                          <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                          <input type="text" name="title" id="title" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-400 rounded-md">
                                        </div>
                          
                                        <div class="col-span-6 sm:col-span-3">
                                          <label for="picturePath" class="block text-sm font-medium text-gray-700">Picture Path</label>
                                          <input type="text" name="picturePath" id="picturePath" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                          
                                        <div class="col-span-6">
                                          <label for="shortDescription" class="block text-sm font-medium text-gray-700">Short description</label>
                                          <input type="text" name="shortDescription" id="shortDescription" maxlength="100" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        <div class="col-span-6">
                                          <label for="description" class="block text-sm font-medium text-gray-700">
                                            Description
                                          </label>
                                          <div class="mt-1">
                                            <textarea id="description" name="description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Your text"></textarea>
                                          </div>
                                        </div>
                                                    
                                        <div class="col-span-2">
                                          <label for="event_date" class="block text-sm font-medium text-gray-700">Event Date</label>
                                          <input type="date" name="event_date" id="event_date" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                          <label for="event_capacity" class="block text-sm font-medium text-gray-700">Event Capacity</label>
                                          <input type="number" name="event_capacity" id="event_capacity" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                          <label for="hour" class="block text-sm font-medium text-gray-700">Hour</label>
                                          <select id="hour" name="hour" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="08:00">08:00</option>
                                            <option value="09:00">09:00</option>
                                            <option value="10:00">10:00</option>
                                            <option value="11:00">11:00</option>
                                            <option value="12:00">12:00</option>
                                            <option value="13:00">13:00</option>
                                            <option value="14:00">14:00</option>
                                            <option value="15:00">15:00</option>
                                            <option value="16:00">16:00</option>
                                            <option value="17:00">17:00</option>
                                            <option value="18:00">18:00</option>
                                            <option value="19:00">19:00</option>
                                            <option value="20:00">20:00</option>
                                            <option value="21:00">21:00</option>
                                            <option value="22:00">22:00</option>
                                          </select>
                                        </div>
                                        
                                        <div class="col-span-6 sm:col-span-3">
                                          <label for="outstanding" class="block text-sm font-medium text-gray-700">Outstanding</label>
                                          <select id="outstanding" name="outstanding" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option value="0">Normal event</option>
                                            <option value="1">Outstanding Event</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                      <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Save
                                      </button>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>

                    </div>
                </div>
                </div>
            </div>

        </section>
    </div>
</main>
@endsection
