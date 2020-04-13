@extends('templates.dashboard')

@section('dashboard-content')
    <section class="">
      <form class="" method="" action="">
        <div>
          <label for="">Old Password</label>
          <input type="password" name="password" id="">
        </div>

        <div>
          <label for="">New Password</label>
          <input type="password" name="password" id="">
        </div>

        <div>
          <label for="">Confirm New Password</label>
          <input type="password" name="password_confirmation" id="">
        </div>

        <div>
         <button type="submit" class="">save</button>
        </div>
      </form>
    </section>
@endsection
