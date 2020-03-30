@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
        <!-- The justified navigation menu is meant for single line per list item.
             Multiple lines will require custom code not provided by Bootstrap. -->
 
            <div class="col-sm-8 col-md-8 col-lg-8 pull-left">
               <!-- Jumbotron -->
                <div class="jumbotron">
                <h1>{{ $company->name }}</h1>
                <p class="lead">{{ $company->description }}</p>
                <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>
                </div>
    
                <div class="row col-md-12 col-lg-12 col-sm-12" style="background: white; margin:10px;">
                <!-- Example row of columns -->
                    <div class="container">
                    <a href="{{ route('projects.create') }}/{{ $company->id }}" class="pull-right btn btn-dark btn-lg">Add Projects</a>
                    </div>
                    @foreach ($company->projects as $project)
                    <div class="col-lg-4 col-sm-4 col-md-4">
                        <h2>{{ $project->name }}</h2>
                        <p class="text-danger">{{ $project->description }}</p>
                        <p><a class="btn btn-primary" href="/projects/{{ $project->id }}" role="button">View Project »</a></p>
                    </div>
                    @endforeach
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
                        <li><a href="/companies/{{ $company->id }}/edit">Edit</a></li>
                    <li><a href="/projects/create/{{ $company->id }}">Add Project</a></li>
                        <li><a href="/companies">List of Companies</a></li>
                        <li><a href="/companies/create">Create New Company</a></li>
                        <li>
                            <a href="#" onclick="
                            var result = confirm('Are you sure you with to delete this Project?');
                            if(result) {
                                event.preventDefault();
                                document.getElementById('delete-form').submit();
                            }
                            ">Delete</a>
                            <form id="delete-form" method="post" style="display: none;" action={{ route('companies.destroy', ['id'=>$company->id]) }}>
                                <input type="hidden" name="_method" value="delete" />
                                {{ csrf_field() }}
                            </form>
                        </li>
                        <li><a href="#">Add New Member</a></li>
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