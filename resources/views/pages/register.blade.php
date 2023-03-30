@extends('layouts.app')

@section('page.title', 'Регистрация')

@push('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
@endpush

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-lg">
            <div class="md:flex">
                <div class="w-full p-4 px-5 py-5">
                    <h2 class="text-gray-900 font-bold text-2xl mb-2">{{ __('Register') }}</h2>
                    <x-panels.success-message/>
                    <form id="register-form" method="POST" action="{{ route('register.store') }}">
                        @csrf
                        <x-panels.auth.register/>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
