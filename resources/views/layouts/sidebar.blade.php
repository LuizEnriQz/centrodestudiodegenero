 <nav id="sidebar">

{{-- CAPTURA DE PODCASTS --}}
     <ul class="list-unstyled components">
         <li>
             <a href="#podcastSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="text-white dropdown-toggle">
                 <i class='fab fa-spotify'></i>
                 PODCASTS</a>
             <ul class="collapse list-unstyled" id="podcastSubmenu">
                 <li>
                     <a class="text-white" href="{{route('podcast.create')}}">Captura de Podcast</a>
                 </li>
                 <li>
                     <a class="text-white" href="{{route('podcast.index')}}">Consulta de Podcast</a>
                 </li>
             </ul>
         </li>
         <li>
              <a href="#investSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="text-white dropdown-toggle">
              <i class="fas fa-search"></i>
                  PUBLICACIONES</a>
              <ul class="collapse list-unstyled" id="investSubmenu">
                  <li>
                      <a class="text-white" href="{{route('publicaciones.create')}}">Captura de Publicación</a>
                  </li>
                  <li>
                      <a class="text-white" href="{{route('publicaciones.index')}}">Consulta de Publicación</a>
                  </li>
              </ul>
          </li>
          <li>
                <a href="#cartelSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="text-white dropdown-toggle">
                <i class="fas fa-file-invoice"></i>
                    CARTELES</a>
                <ul class="collapse list-unstyled" id="cartelSubmenu">
                    <li>
                        <a class="text-white" href="{{route('carteles.create')}}">Captura de Carteles</a>
                    </li>
                    <li>
                        <a class="text-white" href="{{route('carteles.index')}}">Consulta de Carteles</a>
                    </li>
                </ul>
            </li>
     </ul>
</nav>
{{-- <script type="text/javascript">
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
    });
</script> --}}
