<div class="container">
  <div class="row">

    <!-- Top menu -->
    <div class="col-lg-6">
      <ul class="top-menu">
        <li><a href="#">About</a></li>
        <li><a href="#">Advertise</a></li>
        <li>
          <form action="{{ route('switchLang') }}" class="form-lang" method="post">
            <select name="locale" onchange='this.form.submit();'>
              <option value="en">English &nbsp;&nbsp;</option>
              <option value="vi"{{ Lang::locale() === 'vi' ? 'selected' : '' }}>Việt Nam&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
            </select>
            {{ csrf_field() }}
          </form>
        </li>
      </ul>
    </div>
    
    <!-- Socials -->
    <div class="col-lg-6">
      <div class="socials nav__socials socials--nobase socials--white justify-content-end"> 
        <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
          <i class="ui-facebook"></i>
        </a>
        <a class="social social-twitter" href="#" target="_blank" aria-label="twitter">
          <i class="ui-twitter"></i>
        </a>
        <a class="social social-google-plus" href="#" target="_blank" aria-label="google">
          <i class="ui-google"></i>
        </a>
        <a class="social social-youtube" href="#" target="_blank" aria-label="youtube">
          <i class="ui-youtube"></i>
        </a>
        <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
          <i class="ui-instagram"></i>
        </a>
      </div>
    </div>

  </div>
</div>