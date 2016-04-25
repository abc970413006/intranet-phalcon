{{ content() }}

<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
        <div class="card">
            <div class="card-header">
                <h2>Módulos <small>Insira os dados para criar um novo módulo.</small></h2>
            </div>

            <div class="card-body card-padding">
                {{ form("nucleo/modules/create", "method":"post", "autocomplete" : "off") }}

                <div class="form-group fg-float">
                    <div class="fg-line">
                        {{ text_field("name", "class" : "form-control fg-input", 'required': 'required') }}
                        <label class="fg-label">Nome do módulo</label>
                    </div>
                </div>
                <br />

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm m-t-10 waves-effect">Inserir</button>
                </div>
            </div>


        </div>
        {{ end_form() }}
    </div>
</div>