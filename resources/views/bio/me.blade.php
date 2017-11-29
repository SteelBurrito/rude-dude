@extends ('layouts.layout')

@section('title', 'About Me')

@section('active')
  <a class="nav-link" href="{{route ('blog')}}">Blog</a>
  <a class="nav-link active" href="{{route ('me')}}">Who Am I</a>
  <a class="nav-link" href="#">Contact Me</a>
@endsection

@section('blogheader')
  <div class="blog-header">
    <div class="container">
        <h1 class="blog-title">About Me</h1>
        <p class="lead blog-description">Some dude who does web development.</p>
    </div>
  </div>
@endsection

@section('me')
    <div class="col-sm-4 bio-profile">
      <img class="bio-picture" src='https://pbs.twimg.com/profile_images/637069954924154880/V-crjcrj_400x400.jpg' />
      <p>Antonio Kevin Christophorus</p>
      <ul class="list-inline list-social-icons mb-0">
        <li class="list-inline-item">
          <a target="_blank" href="https://www.linkedin.com/in/antonio-kevin-972512145/">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
            </span>
          </a>
        </li>
        <li class="list-inline-item">
          <a target="_blank" href="https://github.com/SteelBurrito">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-github fa-stack-1x fa-inverse"></i>
            </span>
          </a>
        </li>
    </ul>
    </div>
    <div class="col-sm-8 blog-main">
      <div class="blog-post">
        <div>
          <p>Lorem ipsum dolor sit amet, eum ne decore propriae, alterum oportere suscipiantur ei his. Percipit sensibus vix eu. Ad dicam sapientem periculis nam. Ea vis quis sententiae, ius nobis omnium no. Cum te nostrud vivendum perpetua, qui affert platonem argumentum eu.</p>
          <p>Ornatus constituto at ius, idque labitur id qui. Habemus voluptatum constituam cum at. Eam cu platonem erroribus. Ex eam malorum voluptatibus. Eos agam utroque expetendis eu.</p>
          <p>Eu molestiae gloriatur qui, pri quem fastidii eu. Est ut quas democritum moderatius. Ne ius ornatus tincidunt concludaturque, ad saepe torquatos usu. Graece virtute est an. Et sea mundi viris forensibus, ne latine ancillae pro. Atqui errem indoctum ei sea, sea dolorem tacimates at, duo ne integre corpora. Habeo inermis eum ei, te est assum percipitur.</p>          
        </div>
      </div>
    </div> 
@endsection