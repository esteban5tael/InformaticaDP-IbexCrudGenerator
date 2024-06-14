@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Contact
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Contact</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.contacts.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('admin.contacts.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection