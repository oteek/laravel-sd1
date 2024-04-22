@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('dashboard.events_c') }}</div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-3 offset-md-1">
                            <a class="btn btn-primary" href="{{ route('events.create') }}">
                                {{ __('dashboard.new_event') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">{{ __('dashboard.events') }}</div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead class="text-lg text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                {{ __('dashboard.title') }}
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                {{ __('dashboard.startdate') }}
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                {{ __('dashboard.country') }}
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                {{ __('dashboard.action') }}
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($events as $event)
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $event->title }}
                                                </th>
                                                <td class="px-6 py-4">
                                                    {{ $event->start_date }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $event->country->name }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    <a href="{{ route('events.edit', $event)}}">{{ __('dashboard.edit') }}</a>
                                                    <form method="POST"
                                                        action="{{ route('events.destroy', $event) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('events.destroy', $event) }}"
                                                            onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                                            {{ __('dashboard.del') }}
                                                        </a>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">
                                                    {{ __('dashboard.noevents') }}
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>
@endsection