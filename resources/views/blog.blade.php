@extends('layout')

@section('title')
    บทความ
@endsection

@section('content')
    <h2>
        บทความทั้งหมด</h2>
    <hr>
    <div class="row">
        @foreach ($blog as $item)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item['title'] }}</h5>
                        <p class="card-text">{{ $item['content'] }}</p>
                        @if ($item['status'] == 'เผยแพร่')
                            <span class="badge text-bg-success">{{ $item['status'] }}</span>
                        @else
                            <span class="badge text-bg-danger">{{ $item['status'] }}</span>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <br>

    <table class="table table-bordered text-center">
        <thead class="table-info">
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blog as $item)
                <tr>
                    <td>{{ $item['title'] }}</td>
                    <td>{{ $item['content'] }}</td>
                    <td>
                        @if ($item['status'] == 'เผยแพร่')
                            <span class="btn btn-outline-success">{{ $item['status'] }}</span>
                        @else
                            <span type="button" class="btn btn-outline-danger">{{ $item['status'] }}</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <br>
        <a class="btn btn-dark" href="{{ route('form') }}">+ เขียนบทความ</a>
@endsection
