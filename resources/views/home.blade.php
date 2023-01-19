<!DOCTYPE html>
<html lang=es>
    <head>
        <!-- Metadatos -->
        <meta charset="uft-8">
        <meta name="author" content="Jose Murillo - josemprog">
        <meta name="description" content="En este sitio encontrarás lo mejor del baloncesto de Medellín, videos de las mejores jugadas, partidos, torneos, fotos, noticias y todo lo relacionado con el baloncesto de la Ciudad.">
        <meta name="keywords" content="Baloncesto, Baloncesto de medellín, Ball City, ballcitymedellin, Ball Medellín, City Medellín, Baloncesto Paisa, Baloncesto Colombiano">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- título -->
        <title>Ball City | Medellín</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="/img/icono-ball-city.ico" type="image/x-icon">
        <!-- assets de css y javascript para VITE -->
        @vite(['resources/css/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <nav class="navbar bg-body navbar-expand-lg sticky-top mb-3 border-bottom" data-bs-theme="dark">
            <div class="container-fluid">
              <a href="{{ route('home') }}"  class="navbar-brand">
                <img src="/img/marca-ball-city.png" width="100em" alt="Logo de Ball City">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Jugadores</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Partidos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Torneos</a>
                  </li>
                  <li class="nav-item pe-2">
                    <a class="nav-link" href="#">Noticias</a>
                  </li>
                  <hr>
                  <li class="nav-item ps-2 border-start" style="--bs-border-width: 2px;">
                    <a class="nav-link" href="#">
                      <i class="bi bi-cart4"></i>
                      Tienda
                    </a>
                  </li>
                </ul>
                <ul class="navbar-nav">
                    <form class="d-flex me-3" role="search">
                      <input class="form-control form-control-sm me-1 rounded-5" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-info rounded-pill" type="submit">
                        <i class="bi bi-search"></i>
                      </button>
                    </form>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="bi bi-person-fill"></i>                        
                          Cuenta
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="#">Perfil</a></li>
                          <li><a class="dropdown-item" href="#">Configuración</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
                        </ul>
                      </li>
                </ul>
              </div>
            </div>
          </nav>

          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam dolorem accusantium sed ipsum reprehenderit nam, quibusdam enim eveniet quisquam perspiciatis minima distinctio iusto quaerat neque expedita laborum aliquam quasi commodi, est, molestiae maxime voluptates nesciunt nobis adipisci! Quae explicabo omnis quidem velit assumenda in? Exercitationem, officia iste, necessitatibus recusandae ullam culpa sapiente nostrum repellat obcaecati atque totam, ipsum blanditiis fugit assumenda eum aspernatur voluptates sed architecto eaque voluptatem repudiandae id. Non modi, optio tenetur ipsum error beatae sed iure, vero impedit ipsam voluptas autem dolore saepe facilis aliquid ipsa! Tenetur voluptatem accusantium vitae earum saepe harum minus, nisi impedit sint! Maxime, suscipit ipsa nihil, ratione qui eveniet fugiat vitae modi amet minima recusandae, dignissimos praesentium deserunt ex officia veritatis commodi blanditiis numquam delectus. Aspernatur, necessitatibus iure eos ad quaerat deserunt odit accusamus itaque nobis, ipsum reprehenderit. Nostrum tempore quia autem exercitationem iure? Eos impedit blanditiis dignissimos nulla nobis id nostrum excepturi hic natus beatae. Illum et in laborum, enim aut ullam blanditiis libero itaque optio porro incidunt velit maiores minus molestiae deleniti consectetur nobis obcaecati quaerat molestias eaque illo, sequi recusandae fugiat vero! Quam nihil temporibus qui adipisci, aut, atque officia aliquam ipsam quisquam labore nostrum quibusdam sunt eligendi reprehenderit nam odio itaque voluptatem commodi possimus nemo! Quaerat sit quam autem facilis, quisquam dolorum esse excepturi magni doloribus impedit quas illum illo voluptatem perferendis, debitis aut ex numquam eveniet vero officia earum adipisci necessitatibus, quis pariatur. Omnis fuga perspiciatis adipisci cumque accusantium obcaecati, voluptatibus vel modi et id sapiente ipsum neque delectus incidunt ut corporis quaerat. Facilis nam nihil, alias vero dolores iusto pariatur autem iure harum fugit minima beatae! Fugit cum explicabo maiores voluptatibus tenetur repellat reiciendis facere velit quaerat, enim iusto alias eveniet facilis voluptas saepe architecto veniam ipsam unde? Quis deleniti odio error quod vero pariatur nemo blanditiis eaque soluta neque commodi maiores incidunt quas repellendus, veniam quisquam praesentium nulla ipsum recusandae sit voluptatibus? In molestias culpa natus, nulla reiciendis debitis quae vitae ipsum, ducimus dolor quidem. Minus maiores pariatur, necessitatibus unde temporibus labore porro optio dolor reprehenderit doloribus sint ex quis sequi quibusdam corporis vero beatae nostrum est? Similique minima nisi itaque quasi laudantium mollitia labore. Beatae cumque mollitia, accusantium quaerat magnam culpa earum fuga nemo incidunt quisquam, ratione excepturi voluptatem tempora quasi minima aut, error placeat officia. Perferendis hic nam officia ipsam possimus. Alias reprehenderit mollitia quisquam adipisci consequuntur et qui doloremque molestiae nostrum esse voluptatem ex tempora dicta, nemo temporibus voluptate architecto tenetur minima? Deserunt minima quas eligendi nobis magni voluptate modi deleniti eos nihil fugiat! Sequi ad, amet quasi porro minus eius a, recusandae reiciendis soluta ut et sapiente deserunt laudantium id. Fugiat ratione culpa debitis dolore magni minus suscipit doloremque esse voluptas accusamus? Reprehenderit magnam velit ipsam natus omnis eveniet consectetur dignissimos sint quisquam nostrum quae odit tempora iure consequatur tempore eaque, aspernatur alias perspiciatis rem eligendi in temporibus eos. Quibusdam reprehenderit eveniet corporis ducimus. Maxime labore eaque incidunt sapiente mollitia accusantium quia consectetur ducimus quidem error reiciendis culpa, deleniti molestias possimus autem non ea deserunt harum alias iusto enim odit dicta assumenda? Dignissimos nisi rerum pariatur, earum assumenda qui culpa beatae atque voluptatibus, autem, nobis perspiciatis saepe neque omnis cum quos eveniet dicta aperiam iure cupiditate id consequatur. Facere molestiae tenetur sint id quis eum dolorum vitae, nostrum corporis hic nisi doloremque distinctio quas, obcaecati consectetur. Quis corrupti suscipit ipsa sit maxime. Eligendi magnam necessitatibus optio ea ad laborum quaerat, ut in est numquam saepe reprehenderit illo doloribus alias, dolore similique soluta ducimus qui, earum consequuntur mollitia facere dicta ipsum! Unde sapiente vero ipsum, reiciendis necessitatibus perspiciatis? Cumque fugit error incidunt!</p>
    </body>
</html>