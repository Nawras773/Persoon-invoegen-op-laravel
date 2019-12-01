@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Contact aanpassen</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('contacts.update', $contact->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label for="first_name">Voornaam:</label>
                <input type="text" class="form-control" name="first_name" value={{ $contact->first_name }} />
            </div>

            <div class="form-group">
                <label for="first_name">Achternaam:</label>
                <input type="text" class="form-control" name="last_name" value={{ $contact->last_name }} />
            </div>

            <div class="form-group">
                <label for="first_name">email:</label>
                <input type="text" class="form-control" name="email" value={{ $contact->email }} />
            </div>

            <div class="form-group">
                <label for="first_name">Staat:</label>
                <input type="text" class="form-control" name="city" value={{ $contact->city }} />
            </div>

            <div class="form-group">
                <label for="first_name">Land:</label>
                <input type="text" class="form-control" name="country" value={{ $contact->country }} />
            </div>

            <div class="form-group">
                <label for="first_name">Werk:</label>
                <input type="text" class="form-control" name="job_title" value={{ $contact->job_title }} />
            </div>
<!-- hier stond meer -->
            <button type="submit" class="btn btn-primary">Aanpassen</button>
        </form>
    </div>
</div>
@endsection
