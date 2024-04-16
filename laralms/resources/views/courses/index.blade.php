@extends('layouts.admin')

@section(çontent)
    <div class="row">
        <div class="col">
            <h2 class="display3">
                Courses
            </h2>
        </div>
    </div>
    <div class="row">
        @foreach($courses as $course)
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $course->name }}
                        </h5>
                        <h5 class="card-title">
                            {{ $course->courseID }}
                        </h5>
                        <p class="card-text">
                            {{ $course->description }}
                        </p>
                        <a href="{{ route('courses.show', $course) }}" class="btn btn-primary">
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection