@extends('layout.layout')

@section('title', 'Blog Page')

@section('content')
    <h1 class="mb-4 text-center" "py-2">Blog Page</h1>
    <div class="container">
        <table class="table table-bordered  table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Row</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogArray as $index => $post)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $post['title'] }}</td>
                        <td>{{ $post['content'] }}</td>
                        <td>
                            @if ((int) $post['status'] === 1)
                                <span class="badge bg-success">Depoly</span>
                            @elseif ((int) $post['status'] === 2)
                                <span class="badge bg-info">Draft</span>
                            @elseif ((int) $post['status'] === 3)
                                <span class="badge bg-secondary">Die</span>
                            @else
                                <span class="badge bg-warning text-dark">Unknown Status</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
