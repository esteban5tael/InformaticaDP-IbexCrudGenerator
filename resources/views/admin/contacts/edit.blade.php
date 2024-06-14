@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Contact
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Contact</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.contacts.update', $contact->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('admin.contacts.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
