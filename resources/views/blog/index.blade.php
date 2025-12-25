@extends('layouts.app')

@section('page.title', 'our blog')



@section('content')
    <section>
        <x-container>
            <x-title>
                <h1 class="mb-5">
                   {{__('Список постов') }}
                </h1>
            </x-title>

            @if(empty($posts))

                    {{__('нет вообще постов')}}

                @else

                    <div class="row">
                        @foreach($posts as $post)

                        <div class="col-12 col-md-4">

                            <x-post.card :post="$post" />

                        </div>

                        @endforeach
                    </div>

            @endif
        </x-container>
    </section>


@endsection


