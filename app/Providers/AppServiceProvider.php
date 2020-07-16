<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Blade::component('componentes.mensagem-validacao-form', 'componenteMensagemValidacao');
        Blade::component('componentes.modal-deletar', 'componenteModalDeletar');
        Blade::component('componentes.paginacao', 'componentePaginacao');
        Blade::component('componentes.acoes', 'componenteAcoes');
        Blade::component('componentes.cabecalho', 'componenteCabecalho');
        Blade::component('componentes.botao-cadastrar', 'componenteBotaoCadastrar');
        Blade::component('componentes.botao-atualizar', 'componenteBotaoAtualizar');
        Blade::component('componentes.upload', 'componenteUpload');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
