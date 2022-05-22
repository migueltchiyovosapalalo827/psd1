/*
 * Copyright © 2020 por DEVGONGA
 * Todos os direitos reservados.
 * Nenhuma parte deste programa pode ser reproduzida, distribuída ou transmitida de qualquer forma ou por qualquer meio, incluindo fotocópia, gravação ou outros métodos eletrônicos ou mecânicos, sem a permissão prévia por escrito de DEVGONGA, exceto no caso de breves citações incorporadas em análises críticas e outros usos não comerciais permitidos pela lei de direitos autorais. Para solicitações de permissão, escreva para o endereço  devgonga@gmail.com , com o assunto “Coordenador de Permissões”.
 */
$(".input_procurar").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    var elemento = $(".tabela").find('tbody tr');
    elemento.filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
    });
});

$("tr[tr-selecionada2]").click(function (event) {
    // A sua cor do fundo é trocada
    $(this).toggleClass('bg-success').siblings();
    $(this).toggleClass('text-white').siblings();
    // Busca o input que esta dentro desta tr
    var input_tr = $(this).find('input');
    //  Se o input não  estiver selecionado
    if (input_tr[0].checked == false) {
        // seleciona o input
        input_tr[0].checked = true;
    } else {
        //  se não disceleciona o input
        input_tr[0].checked = false;
    }
    /*COMMENTS BY Fabricio  gonga*/
});

$("[trAllSelect]").click(function (e) {
    trs = $(".tablaAllSelect").find('tbody tr');
    for (let i = 0; i < trs.length; i++) {
        let trObj=$(trs[i]);
        let inputTr = trObj.find("input");
        trObj.addClass('bg-success').addClass('text-white');
        inputTr[0].checked = true ;

    }
});






/**
 * @description Class permicoesModulo
 */
var permicoesModulo = (function ($) {
    "use strict";
    function permicoesModulo() {
        this.init = function init() {
            let perm_grupo=$("[tb_perm_grupo] input");
            perm_grupo.filter(function(index) {
                let x=".perm_"+$(this).val();
                $(x).addClass("bg-success").addClass("text-white").find("input")[0].checked=true;
            });
        }
    }
    return permicoesModulo;
})(jQuery);



/**
 * @description Class InqueritoModulo
 */
var InqueritoModulo = (function ($) {
    "use strict";
    let _pergunta;
    /**/
    let definicoes = {
        btnAddP: "[btnAddP]",
        btnAddO: "[btnAddO]",
        btnRemP: "[btn_rem_p]",
        btnAltP: "[btnAltP]",
        btnNO: "[btn_nova_op]",
        btnRO: "[btn_rem_op]",
        btnLf: "[btn_limpar_form]"
    };
    var _perguntaC = 0;
    // Metodos privados
    var _inquerito = {
        // CONFIGURAÇÕES
        definicoes: function () {
            return definicoes;
        },
        configurarDefinicoes: function (opcoes) {

            let chave, valor;
            for (chave in opcoes) {
                valor = opcoes[chave];
                if (valor !== undefined && definicoes.hasOwnProperty(chave)) {
                    definicoes[chave] = $(valor);
                }
            }
            return this;
        },
        observadorInit: function () {
            $(this.definicoes().btnAddP).off("click");
            $(this.definicoes().btnAddP).click(function () {
                _pergunta.add_pergunta();
            });
            $(this.definicoes().btnRemP).off("click");
            $(this.definicoes().btnRemP).click(function () {
                _pergunta.remover_pergunta(this);
            });
            $(this.definicoes().btnNO).off("click");
            $(this.definicoes().btnNO).click(function () {
                _pergunta.add_opcao(this);
            });
            $(this.definicoes().btnAltP).off("change");
            $(this.definicoes().btnAltP).change(function () {
                _pergunta.alterar_tipo(this);
            });
            $(this.definicoes().btnLf).off("click");
            $(this.definicoes().btnLf).click(function () {
                _pergunta.limpar_tudo();
            });
        },
        observadorOp: function () {
            $(this.definicoes().btnRO).off("click");
            $(this.definicoes().btnRO).click(function () {
                _pergunta.remover_op(this);
            });
        }
    };
    _pergunta = {
        limpar_tudo:function(){
            _perguntaC = 0;
            $("#perguntas").html("");
        },
        add_pergunta: function () {
            const pergunta = `<div class="row pl-0 pergunta">
                            <div class="col-md-6 pergunta-contexto">
                                <div class="form-group ">
                                    <label for="">Pergunta</label>
                                    <input type="text" class="form-control" name="perguntas[${_perguntaC}]" placeholder="Insira aqui a pergunta." required>
                                </div>
                                 <input type="hidden"  class="contador" value="${_perguntaC}">
                            </div>
                            <div class="form-group col-md-6">
                                <label >Tipo de pergunta</label>
                                <select class="form-control" required="" name="tipo[${_perguntaC}]" btnAltP>
                                    <option disabled="">Selecione um tipo de pergunta</option>
                                    <option selected value="rl">Resposta longa</option>
                                    <option value="rc">Resposta curta</option>
                                    <option value="ro">Opção unica</option>
                                </select>
                            </div>
                            <div class=" d-flex justify-content-end col-md-12">
                                <a href="#eliminar_pergunta" btn_rem_p class="btn-sm nounderline d-flex align-items-center  btn " style="color: #5999c3;" onMouseOver="this.style.color='#25364a'" onMouseOut="this.style.color='#5999c3'">
                                    <i class="material-icons">delete_forever</i>Eliminar
                                </a>
                            </div>
                            <hr class="mt-0 w-96">
                        </div>`;
            $("#perguntas").append(pergunta);
            _inquerito.observadorInit();
            _perguntaC += 1;
        },
        remover_pergunta: function (contexto) {
            $($(contexto)[0].parentNode.parentNode).remove();
        },
        alterar_tipo: function (contexto) {
            let jqContextoObj = $(contexto);
            let tipo_de_pergunta = jqContextoObj.val();
            switch (tipo_de_pergunta) {
                case 'rc':
                    rc();
                    break;
                case 'rl':
                    rl();
                    break;
                case 'ro':
                    ro();
                    break;
            }

            function rc() {
                $(jqContextoObj[0].parentNode.parentNode).find(".opcoes").remove();
            }
            function rl() {
                $(jqContextoObj[0].parentNode.parentNode).find(".opcoes").remove();
            }

            function ro() {
                let opcoes = `
                           
                        <div class="opcoes">
                         <hr class="mt-0 mb-0">
                           <label for="" class="pt-2">Opções</label>
                                    <div class="pergunta-op ">
                                    </div>
                                    <div class="mt-2">
                                        <button type="button" btn_nova_op class="btn btn-primary-dark btn-sm d-flex align-items-center" ><i class="material-icons">album</i> Nova opção</button>
                                    </div>
                                </div>
`;
                $(jqContextoObj[0].parentNode.parentNode).find(".pergunta-contexto").append(opcoes);
                _inquerito.observadorInit();
            }
        },
        add_opcao: function (contexto) {
            let posicao = $(contexto.parentNode.parentNode).prev().val()
            let opcao = `<div class="custom-control custom-radio opcao d-flex align-items-center mt-2">
                            <label class="custom-control-label align-middle">
                                <input type="text" class="form-control form-control-sm" name="opcao[${posicao}][]">
                            </label>
                            <button type="button" btn_rem_op class="btn btn-outline-danger btn-sm p-0 ml-1" style="line-height: 0">
                                <i class="material-icons  " rel="button" >delete_forever</i>
                            </button>
                          </div>`;
            $(contexto.parentNode.parentNode).find(".pergunta-op").append(opcao);
            _inquerito.observadorOp();
        },
        remover_op: function (contexto) {
            $(contexto.parentNode).remove();
        }
    };

    /**
     *
     * @param df
     * @returns {InqueritoModulo}
     * @constructor
     */
    function InqueritoModulo(df) {
        this.init = function init() {
            _inquerito.observadorInit();
        }
    }
    return InqueritoModulo;
})(jQuery);

let InqueritoInstancia = new InqueritoModulo();

InqueritoInstancia.init();
