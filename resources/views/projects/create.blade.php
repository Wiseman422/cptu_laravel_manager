@extends('layouts.app')

@section('content')



    <div class="container">

        <div class="row">
        <!-- The justified navigation menu is meant for single line per list item.
             Multiple lines will require custom code not provided by Bootstrap. -->
 
            <div class="row col-sm-8 col-md-8 col-lg-8 pull-left">
    
                <div class="row col-md-12 col-lg-12 col-sm-12" style="background: white; margin:10px;">
                    <form method="post" action="{{ route('projects.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="project-name">Name<span class="require">*</span></label>
                            <input type="text" class="form-control" id="project-name" placeholder="Enter Name" name="name" required spellcheck="false" />
                        </div>
                        <div class="form-group">
                            <label for="description">Name<span class="require">*</span></label>
                            <textarea class="form-control text-left" rows="5" cols="80" id="description" name="description" placeholder="Enter description"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                        </div>
                        <input type="hidden" name="company_id" value="{{ $company_id }}" />
                    </form>
                </div>
            </div>
            <div class="col-sm-3 col-sm-offset-1 blog-sidebar pull-right">
                {{-- <div class="sidebar-module sidebar-module-inset">
                    <h4>About</h4>
                    <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                </div> --}}
                <div class="sidebar-module">
                    <h4>Actions</h4>
                    <ol class="list-unstyled">
                        <li><a href="/projects/">List of Projects</a></li>
                    </ol>
                </div>
                {{-- <div class="sidebar-module">
                    <h4>Members</h4>
                    <ol class="list-unstyled">
                        @foreach ($company->user as $user)
                            <li><a href="#">April 2013</a></li>
                        @endforeach
                    </ol>
                </div> --}}
            </div>
        </div>
    </div>
@endsection