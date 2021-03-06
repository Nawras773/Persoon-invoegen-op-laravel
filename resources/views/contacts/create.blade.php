@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Contact toevoegen</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('contacts.store') }}">
          @csrf
          <div class="form-group">
              <label for="first_name">Voornaam:</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>

          <div class="form-group">
              <label for="first_name">Achternaam:</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>

          <div class="form-group">
              <label for="first_name">email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>

          <div class="form-group">
              <label for="first_name">Staat:</label>
              <input type="text" class="form-control" name="city"/>
          </div>

          <div class="form-group">
              <label for="first_name">Land:</label>
              <input type="text" class="form-control" name="country"/>
          </div>

          <div class="form-group">
              <label for="first_name">Werk:</label>
              <input type="text" class="form-control" name="job_title"/>
          </div>
<!-- hier staat eigenlijk meer -->
          <button type="submit" class="btn btn-primary-outline">Toevoegen</button>
      </form>
  </div>
</div>
</div>
@endsection
