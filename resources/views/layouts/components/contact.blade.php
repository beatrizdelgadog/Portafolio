<section class="contact" id="connect">
    <div class="container">
        <div class="align-items-center row">
            <div size="12" class="col-md-6">
                <div><img class="animate__animated animate__zoomIn" src="{{ asset('assets/img/testing.png') }}" alt="Contacto"></div>
            </div>
            <div size="12" class="col-md-6">
                <div>
                    <div class="animate__animated animate__fadeIn">
                        <h2>Contáctame</h2>
                        <form onsubmit="sendFormContact(event)" id="contactForm" >
                            <div class="row">
                                @csrf
                                <div size="12" class="px-1 col-sm-12"><input name="subject" id="subject" type="text" placeholder="Asunto" required value=""></div>
                                <div size="12" class="px-1 col-sm-6"> <input name="name" id="name" type="text" placeholder="Nombre"required value=""></div>
                                <div size="12" class="px-1 col-sm-6"> <input name="last_name" id="last_name" type="text" placeholder="Apellido" required value=""></div>
                                <div size="12" class="px-1 col-sm-6"> <input name="email" id="email" type="email" required placeholder="Correo electrónico" value=""></div>
                                <div size="12" class="px-1 col-sm-6"> <input name="phone" id="phone" type="tel" placeholder="Número de celular" value=""></div>

                                
                                <div size="12" class="px-1 col">
                                    <textarea rows="6" required placeholder="Mensaje" name="message" id="message"></textarea>
                                    <button id="submitButton" class="button-send-animation" type="submit">
                                        <span >Enviar</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function sendFormContact(event){
        event.preventDefault();
        $('.error-fields').addClass('hidden');
        $('#submitButton').html('<span >Enviando...</span>');
        $('#submitButton').attr('disabled',true);
        $.easyAjax({
            url: '{{route('contact.send')}}',
            container: '#contactForm',
            type: "POST",
            redirect: false,
            data: $('#contactForm').serialize(),
            success: function(response) {
                $('#submitButton').removeAttr('disabled');
                $('#submitButton').html('<span >Enviar</span>');
                if (response.action === 'error') {
                    $.notify({
                        icon: 'fa-regular fa-thumbs-down',
                        title: response.message,
                        message: '',
                    }, {
                        type: 'warning',
                        placement: {
                            from: "bottom",
                            align: "right"
                        },
                        time: 1000,
                    });
                } else {
                    $.notify({
                        icon: 'fa-regular fa-thumbs-up',
                        title: response.message,
                        message: '',
                    }, {
                        type: 'info',
                        placement: {
                            from: "bottom",
                            align: "right"
                        },
                        time: 1000,
                    });
                    $('#modal-component').trigger('click');
                }

            },
            error: function(error) {
                $('#submitButton').removeAttr('disabled');
                $('#submitButton').html('<span >Enviar</span>');
                showErrors(error);
            },

        });
    }
</script>