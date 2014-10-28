<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ Lang::get('general.title') }}</title>
  <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  {{ HTML::style('bower_components/foundation/css/foundation.css') }}
  {{ HTML::style('bower_components/foundation-icons/foundation-icons.css') }}
  {{ HTML::style('style/main.css') }}
</head>

<body>
  <div class="icon-bar seven-up">
    <a class="item">
      {{ HTML::image('images/logo.png', 'Teamwork logo', array('class' => 'logo')) }}
    </a>
    <a class="item">
      <i class="fi-torsos-all size-48"></i>
      <label>{{ Lang::get('general.team_members') }}</label>
    </a>
    <a class="item">
      <i class="fi-clipboard-notes size-48"></i>
      <label>{{ Lang::get('general.tasks') }}</label>
    </a>
  </div>

  @yield('content')

  <div class="footer">
    <small>{{ Lang::get('general.footer') }}</small>
  </div>

  {{ HTML::script('bower_components/jquery/dist/jquery.js') }}
  {{ HTML::script('bower_components/foundation/js/foundation.min.js')}}
  <script>
    $(document).foundation();
  </script>
</body>
</html>