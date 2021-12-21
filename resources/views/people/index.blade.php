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
                                <h3 class="card-label"> Person
                                    <span class="d-block text-muted pt-2 font-size-sm"> Person Data</span></h3>
                            </div>
                            <div class="card-toolbar">
                                <!--begin::Button-->
                            <a href="/people/create" class="btn btn-primary font-weight-bolder">
                            <span class="svg-icon svg-icon-md">
                            </span>New Person</a>
                                <!--end::Button-->
                            </div>
                        </div>
                        <div class="card-body">
                            <!--begin: Datatable-->
                            <table id="dt_people" class="table datatable datatable-bordered datatable-head-custom">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>No.</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Avatar</th>
                                    <th>Organization</th>
                                    <th>Created By</th>
                                    <th>Created At</th>
                                </tr>
                                </thead>
                            </table>
                            <!--end: Datatable-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
        alert(msg);
    }
</script>
<script src="{{ asset('js/people.js') }}" type="application/javascript" ></script>

