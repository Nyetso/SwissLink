@extends('layout')

@section('content')
<body>
    <div>
        <h1>Create News</h1>
        <form @submit.prevent="submitForm">
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" v-model="request.title">
        </div>
        <div>
            <label for="body">Body:</label>
            <textarea id="body" v-model="request.body"></textarea>
        </div>
        <div>
            <a href="/create/store/{request}" >Create</button>
            <a href="/">Cancel</a>
        </div>
        </form>
    </div>
</body>

@endsection
