@extends('layouts.app')

{{-- set title --}}
@section('title', ' Many to Many')

@section('content')

    <!-- breadcumbs -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">
                Many to Many
            </h1>
        </div>
    </header>

    <div class="pb-16 pt-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8  lg:flex-row flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-800">
                            <tr class="text-gray-100">
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Name</th>
                                <th scope="col" colspan="2" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Roles</th>
                            </tr>
                        </thead>

                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($role_user as $user)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $user->name }}
                                    </td>

                                    @foreach ($user->roles as $role)
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $role->name }}
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach

                            @empty($role_user)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">Data not Found</td>
                            </tr>
                            @endempty
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection