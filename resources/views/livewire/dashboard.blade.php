@push('css')

<style>
    /* List */
    table.errorlist .counter {
        text-align: right;
    }

    table.errorlist .counter span {
        background-color: #eee;
        border-radius: 2px;
        padding: 1px 5px;
    }

    /* Summaries*/
    table.summaries td {
        padding-right: 40px;
    }

    table.summaries td.critical {
        color: #e6614f;
    }

    table.summaries div.value {
        font-size: 40px;
        margin-top: 10px;
    }

    /* Bar Chart */
    .barchart {
        font-size: 9px;
        line-height: 15px;
        table-layout: fixed;
        text-align: center;
        width: 100%;
        height: 226px;
    }

    .barchart tr:nth-child(1) td {
        vertical-align: bottom;
        height: 200px;
    }

    .barchart .bar {
        background: #0DA58E;
        padding: 0px 2px 0;
    }

    .barchart .bar1 {
        background: #0da547;
        padding: 0px 2px 0;
    }

    .barchart .bar2 {
        background: #e78568;
        padding: 0px 2px 0;
    }

    .barchart .label {
        background-color: black;
        margin-top: -30px;
        padding: 0 3px;
        color: white;
        border-radius: 4px;
    }

    /* Start PI Chart */
    #chartdiv {
        width: 100%;
        height: 245px;
    }

    /* End PI Chart */
</style>

@endpush
<x-app-layout>
    <x-slot name="title">
        {{ __('DASHBOARD') }}
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="rounded">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                
                </div>
            </div>
        </div>
        <!-- end page title -->
        <!-- end row -->


    </div>
</x-app-layout>

