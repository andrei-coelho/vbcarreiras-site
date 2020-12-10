<script>

    const ERROR = <?php echo (isset($req[0]) && $req[0] == 'error' ? "'".$req[1]."'" : 'false'); ?>;
    const MESSAGE = <?php echo (isset($req[0]) && $req[0] == 'message' ? "'".$req[1]."'" : 'false'); ?>;

</script>

<div id="contato-page" class="container mt-3 border-top pt-5 pb-5">
    <div class="row justify-content-center">

        <div class="col-12 col-md-9">
            <h1 class="big" style="color: #F02E67">Contato</h1>
        </div>
        <div class="col-12 col-md-4">
            <p>
            <br><br>
            Contato: (11) 99918 8548 - <a href="http://bit.ly/vivanebuck">Link do Whatsapp</a><br>
            E-mail: contato@vbcarreiras.com.br</p>
        </div>
        <div class="col-12 col-md-4 d-flex flex-md-row-reverse">
            <a target="_blank" href="https://instagram.com/vb_carreiras_?igshid=1tswp4hbed5le"><img class="p-1" src="<?php _url("img/socialmedias/insta.jpg"); ?>" alt="" style="width: 50px;"></a>
            <a target="_blank" href="https://br.linkedin.com/in/vivianebuck"><img class="p-1" src="<?php _url("img/socialmedias/linkedin.jpg"); ?>" alt="" style="width: 50px;"></a>
            <a target="_blank" href="https://www.facebook.com/VivianeBuckCarreiras/"><img class="p-1" src="<?php _url("img/socialmedias/face.jpg"); ?>" alt="" style="width: 50px;"></a>
            <a target="_blank" href="http://bit.ly/vivanebuck"><img class="p-1" src="<?php _url("img/socialmedias/whatsapp.jpg"); ?>" alt="" style="width: 55px;"></a>
        </div>
        <div class="col-12 col-md-8">
            
            <form id="form-email" action="<?php _url("send_email"); ?>" method="post" class="p-3 p-md-5 mt-3 bg-white" style="border: 4px solid #383282;">
                <p><b>Envie-nos um mensagem:</b></p>
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input name="nome" type="text" class="form-control" id="nome" placeholder="Seu nome">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Seu email">
                    <small id="emailHelp" class="form-text text-muted">Nós nunca compartilharemos seu e-mail com ninguém.</small>
                </div>

                <div class="form-group">
                    <label for="mensagem">Mensagem:</label>
                    <textarea name="mensagem" class="form-control" id="mensagem" rows="3"></textarea>
                </div>

                <button id="enviar" type="button" class="btn btn-primary">Enviar</button>
            </form>
                
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color: #383282;">
    <div class="row">
        <div class="col-12">
            <p class="text-white text-center">© 2020 Viviane Buck Carreiras. Todos os direitos reservados</p>
        </div>
        <div class="col-12" style="top: -300px; z-index: -1; position: relative; height: 300px; width: 100%; background-color: #383282;">

    </div>
    </div>
</div>