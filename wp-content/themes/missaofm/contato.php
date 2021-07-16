<?php 
/**
 * Template Name: Contato
 *
 */
get_header();?>
<style>
    body {
    background-color: #0830555A;
}
</style>

<script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />

<section id="sessao-contato" class="mb-5 mt-5">
    <div class="d-flex flex-column contato-form">
        <form action="#" id="form-contato" class="d-flex w-100 flex-column">
            <div class="d-flex justify-content-center align-items-center">
                <div class="d-flex">
                    <h3 class="titulo-contato">Contato</h3>
                </div>
            </div>
            <div class="d-flex flex-column justify-content-start align-items-start w-100">
                <div class="d-flex justify-content-between w-100 mt-4 container-dois">
                    <div class="d-flex container-input">
                        <div class="d-flex flex-column">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome" placeholder="Nome" required>
                        </div>
                    </div>
                    <div class="d-flex container-input">
                        <div class="d-flex flex-column">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="Email" required>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-start w-100 mt-4">
                    <div class="d-flex container-input">
                        <div class="d-flex flex-column">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="telefone" name="telefone" id="telefone" placeholder="Telefone" required>
                        </div>
                    </div>
                </div>
                <div class="d-flex w-100 mt-4">
                    <div class="d-flex flex-column w-100">
                        <label for="mensagem">Mensagem</label>
                        <textarea name="mensagem" id="mensagem" rows="5" placeholder="Escreva sua mensagem aqui" required></textarea>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <div id="container-btn">
                    <button class="button-missao" id="btnenviarcontato">Enviar</button>
                </div>
                <div class="d-flex" id="container-load">
                    <div style="display: none;" class="lds-dual-ring"></div>
                </div>
            </div>
        </form>
    </div>
</section>
<div class="modal fade" id="modalsucesso" tabindex="-1" role="dialog" aria-labelledby="modalsucessoTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="d-flex justify-content-center align-items-center flex-column">
          <div class="d-flex mt-4">
            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
            </svg>
          </div>
          <div class="d-flex mt-4">
              <span> Recebemos seu contato, logo entraremos em contato!</span>
          </div>
          <div class="d-flex mt-3 pb-3">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Ok!</button>
          </div>
      </div>
    </div>
  </div>
</div>
<section id="mapcontainer" class="w-100 pb-5">
    <div class="d-flex justify-content-center align-items-center w-100">
        <div class="d-flex w-100" style="max-width: 1200px!important;">
            <div id='map' style='width: 100%; height: 500px;'></div>
        </div>
    </div>
</section>
<script>
mapboxgl.accessToken = '<?php echo get_field('chave_open_box', 'option');?>';
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/light-v10',
    center: [<?php echo get_field('latitudelongitude', 'option');?>],
    zoom: 15
});
var marker1 = new mapboxgl.Marker({ color: '#F29544',})
    .setLngLat([<?php echo get_field('latitudelongitude', 'option');?>])
    .addTo(map);
</script>
<script>
    ativarMenu('#contato');
</script>
<?php get_footer();?>