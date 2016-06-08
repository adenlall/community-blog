@extends('backend.layout')

@section('title')
    <title>{{ config('blog.title') }} | New Post</title>
@stop

@section('content')
    <section id="main">

        @include('backend.partials.sidebar-navigation')

        <section id="content">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <ol class="breadcrumb">
                            <li><a href="/admin">Home</a></li>
                            <li><a href="/admin/post">Posts</a></li>
                            <li class="active">New Post</li>
                        </ol>

                        @include('shared.errors')

                        @include('shared.success')

                        <h2>New Post</h2>
                    </div>
                    <div class="card-body card-padding">
                        <form role="form" method="POST" id="postCreate" action="{{ route('admin.post.store') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            @include('backend.post.partials.form')

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i>&nbsp;&nbsp;Save</button>&nbsp;
                                <a href="/admin/post" class="btn btn-default">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </section>
@stop

@section('unique-js')
    @include('backend.post.partials.summernote')
@stop