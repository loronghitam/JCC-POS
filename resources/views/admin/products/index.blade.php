@extends('layouts.app')

@push('style')
 @livewireStyles
@endpush

@push('script')
 @livewireStyles
@endpush

@section('content')
   <div class="container">
    <livewire:table-category></livewire:table-category>
   </div>
@endsection
