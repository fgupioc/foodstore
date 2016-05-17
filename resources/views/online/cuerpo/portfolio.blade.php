<section id="portfolio" class="module-sm">
    <div class="container-fluid">
        <!-- FILTERS -->
        <div class="row">
            <div class="col-sm-12">
                <ul id="filters" class="filters font-alt">
                    <li><a href="#" class="current" data-filter="*">Todos</a></li>
                    <li><a href="#" data-filter=".fashion">Fashion</a></li>
                    <li><a href="#" data-filter=".travel">Travel</a></li>
                    <li><a href="#" data-filter=".music">Music</a></li>
                    <li><a href="#" data-filter=".video">Video</a></li>
                </ul>
            </div>
        </div>
        <!-- /FILTERS -->
        <div class="works-grid-wrapper">
            <div id="works-grid" class="works-grid works-grid-gutter">
               @include('online.cuerpo.contenido')
            </div>
        </div>
        <!-- works-grid-wrapper -->
        <!-- SHOW MORE -->
        <div class="row">
            <div class="col-sm-12">
                <div class="m-t-70 text-center">
                    <button id="show-more" class="btn btn-dark show-more">More works</button>
                </div>
            </div>
        </div>
        <!-- /SHOW MORE -->
    </div>
</section>