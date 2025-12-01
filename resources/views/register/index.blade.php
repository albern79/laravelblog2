@extends('layouts.auth')

@section('page.title')
    Регистрация
@endsection

@section('auth.content')
    <x-card>
        <x-card-header>
            <x-card-title>
                {{ __('Регистрация')}}
            </x-card-title>

            <x-slot name="right">

            <a href="{{route('login')}}">
                {{ __('Вход')}}
            </a href>

            </x-slot>
        </x-card-header>

        <x-card-body>
            <x-form action="{{ route('register.store') }}" method="POST">

                <x-form-item>
                    <x-label required> {{ __('Name')}}</x-label>
                    <x-input type="text" name="name" autofocus />
                    </form-control>
                </x-form-item>

                <x-form-item>
                    <x-label required> {{ __('Email')}}</x-label>
                    <x-input type="email" name="email" autofocus />
                    </form-control>
                </x-form-item>

                <x-form-item>
                    <x-label required> {{ __('Пароль')}}</x-label>
                    <x-input type="password" name="password" />
                    </form-control>
                </x-form-item>

                <x-form-item>
                    <x-label required> {{ __('Пароль подтвердить')}}</x-label>
                    <x-input type="password" name="password_confirmation" />
                    </form-control>
                </x-form-item>


                <x-form-item>
                    <x-checkbox name="remember" value="1">
                        {{ __('Я согласен на обработку пользовательских данных') }}
                    </x-checkbox>
                </x-form-item>

                <x-button type="submit">
                    {{ __('Войти')}}
                </x-button>
            </x-form>
        </x-card-body>

    </x-card>
@endsection
