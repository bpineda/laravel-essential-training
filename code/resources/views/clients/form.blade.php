@extends('layouts.app')

@section('content')

    <div class="row">
      <div class="medium-12 large-12 columns">
        <h4>Form Client</h4>
        <form action="" method="post">
          <div class="medium-4  columns">
            <label>Title</label>
            <select name="form[title]">            
              <option value=""></option>
            </select>
          </div>
          <div class="medium-4  columns">
            <label>Name</label>
            <input name="form[name]" value="" type="text" />
          </div>
          <div class="medium-4  columns">
            <label>Last Name</label>
            <input name="form[lastName]" value="" type="text" />
          </div>
          <div class="medium-8  columns">
            <label>Address</label>
            <input name="form[address]" value="" type="text" />
          </div>
          <div class="medium-4  columns">
            <label>zip_code</label>
            <input name="form[zipCode]" value="" type="text" />
          </div>
          <div class="medium-4  columns">
            <label>City</label>
            <input name="form[city]" value="" type="text" />
          </div>
          <div class="medium-4  columns">
            <label>State</label>
            <input name="form[state]" value="" type="text" />
          </div>
          <div class="medium-12  columns">
            <label>Email</label>
            <input name="form[email]" value="" type="text" />
          </div>
          <div class="medium-12  columns">
            <input type="submit" value="SAVE" class="button success hollow" />
          </div>
        </form>
      </div>
    </div>

@endsection
