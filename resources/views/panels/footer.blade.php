<!-- BEGIN: Footer-->
<footer
  class="{{$configData['mainFooterClass']}} @if($configData['isFooterFixed']=== true){{'footer-fixed'}}@else {{'footer-static'}} @endif @if($configData['isFooterDark']=== true) {{'footer-dark'}} @elseif($configData['isFooterDark']=== false) {{'footer-light'}} @else {{$configData['mainFooterColor']}} @endif  orange">
  <div class="footer-copyright">
    <div class="container ">
      <span>&copy; 2020 <a href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
          target="_blank"> - SikolaSoft</a> Todos Direitos Reservado.
      </span>
      <span class="right hide-on-small-only">
        Desenvolvimento e Design Por<a href="https://www.lucansolucoes.co.ao//"> GC-LUCAN </a>
      </span>
    </div>
  </div>
</footer>

<!-- END: Footer-->
