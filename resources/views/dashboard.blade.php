<link rel="stylesheet" href="{{ asset('/css/styles.bundle.css') }}" type="text/css" />

@include('layouts.header')


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="card card-custom">
                        <div class="card-header flex-wrap border-0 pt-6 pb-0">
                            <div class="card-title">
                                <h3 class="card-label">
                                    <span class="d-block text-muted pt-2 font-size-sm"> </span></h3>
                            </div>
                            <div class="card-toolbar">
                                <!--end::Button-->
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6" style="color: deepskyblue;">
                                    <a href="/organization" style="font-size: 42px;">Organization</a>
                                </div>
                                <div class="col-md-6" style="color: deepskyblue;">
                                    <a href="/people" style="font-size: 42px;">People</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="../js/" type="application/javascript" ></script>
@endsection


