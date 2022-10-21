@extends('layouts.admin')

@push('style')
 @livewireStyles
@endpush

@push('script')
 @livewireStyles
 @livewire('livewire-ui-modal')

@endpush

@section('content')
   <div class="container">
    <livewire:table-category></livewire:table-category>
   </div>
@endsection
