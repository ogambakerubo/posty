@extends('layouts.app')
@section('content')
<div class="flex justify-center">
    <div class="w-8/12 ">
        <div class="p-6">
            <h1 class="text-2xl font-medium mb-1">{{ $user->name }}</h1>
            <p>Showing {{ $posts->count() }} {{ Str::plural('post', $posts->count()) }}</p>
            <p> A total of {{
                $user->receivedLikes()->count() }} {{ Str::plural('like',
                $user->receivedLikes()->count()) }} received</p>
        </div>
        <div class="bg-white p-6 rounded-lg">
            @if ($posts->count())

            @foreach ($posts as $post)

            <x-post :post="$post" />

            @endforeach

            {{ $posts->links() }}

            @else

            <p>{{$user->name}} does not have any posts.</p>

            @endif
        </div>
    </div>
</div>
@endsection