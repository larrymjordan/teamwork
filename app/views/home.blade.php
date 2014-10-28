@extends('layouts.default')
@section('content')
<div class="home">
  <div clas="row">
    <div class="columns large-12">
      <div class="row">
        <div class="large-offset-1 large-6 home-content">
          <h1 class="emphasis top-space">{{ Lang::get('general.home_informative_1') }}</h1>
          <p class="text-justify">
            <span class="teamwork">TeamWork</span>
            {{ Lang::get('general.home_informative_2') }}
          </p>
          <p class="text-justify">
            {{ Lang::get('general.home_informative_3') }}
          </p>
          <p class="emphasis">
            {{ Lang::get('general.home_informative_4')}}
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@stop