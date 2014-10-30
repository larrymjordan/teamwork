<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ Lang::get('general.title') }}</title>
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
  {{ HTML::style('bower_components/foundation/css/foundation.css') }}
  {{ HTML::style('bower_components/foundation-icons/foundation-icons.css') }}
  {{ HTML::style('style/main.css') }}
</head>

<body>
  <div class="icon-bar seven-up">
    <a class="item" href="{{ URL::to('/') }}">
      {{ HTML::image('images/logo.png', 'Teamwork logo', array('class' => 'logo')) }}
    </a>
    <a class="item" href="{{ URL::route('members.index') }}">
      <i class="fi-torsos-all size-48"></i>
      <label>{{ Lang::get('general.team_members') }}</label>
    </a>
    <a class="item" href="{{ URL::route('tasks.index') }}">
      <i class="fi-clipboard-notes size-48"></i>
      <label>{{ Lang::get('general.tasks') }}</label>
    </a>

    <?php if(isset($flash)): ?>
      <a class="item" href="{{ $flash['url'] }}">
        <i class="fi-plus size-48"></i>
        <label>{{ $flash['label'] }}</label>
      </a>
    <?php endif; ?>

    <?php if(isset($flashTask)): ?>
      <a class="item" href="{{ $flashTask['url'] }}">
        <i class="fi-plus size-48"></i>
        <label>{{ $flashTask['label'] }}</label>
      </a>
    <?php endif; ?>
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