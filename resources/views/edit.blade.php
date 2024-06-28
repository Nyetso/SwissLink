@extends('layout')

@section('content')
<body>
    <div>
        <h1>Edit News</h1>
        <form @submit.prevent="submitForm">
          <div>
            <label for="title">Title:</label>
            <input type="text" id="title"v-model="form.title">
          </div>
          <div>
            <label for="body">Body:</label>
            <textarea id="body" v-model="form.body"></textarea>
          </div>
          <div>
            <a href="/edit/{form}">Update</button>
            <a href="/">Cancel</a>
          </div>
         </form>
      </div>
</body>


@endsection
